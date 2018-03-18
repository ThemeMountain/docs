const dotenv = require('dotenv').config()
const _ = require('lodash')
const path = require('path')
const fs = require('fs-extra')
const yargs = require('yargs')
const argv = yargs.argv
const glob = require('glob-all')
const command = require('node-cmd')
const algoliasearch = require('algoliasearch')

const env = argv.e || argv.env || 'local'
const build_path = 'build_' + env

getSearchIndexJSON = (key, buildPath) => {
   return path.normalize( glob.sync([buildPath + '/**/'+key+'/**/search-index.json']).toString() )
}

exports.sync = (sites, config) => {

    if (!sites) {
        console.error('Sites object was malformed or not provided. Algolia sync aborted.')
        process.exit()
    }

    if (dotenv.error) {
        console.error('No .env file found, please create it from .env.example and add your Algolia credentials.')
        process.exit()
    }

    if (!process.env.ALGOLIA_APP_ID && !process.env.ALGOLIA_SECRET) {
        console.error('Please first set your default Algolia credentials in the .env file.')
        process.exit()
    }

    for (let s in sites) {
        const site = sites[s]
        const title = site.title
        const algoliaConfig = site.search.algolia

        if (!algoliaConfig.indexName) {
            console.error('[' + title + ']', 'No Algolia index defined in config.php for this site. Skipping...')
            continue
        }

        const appID = algoliaConfig.appID && algoliaConfig.appID.length > 0 ? algoliaConfig.appID : process.env.ALGOLIA_APP_ID
        const appSecret = algoliaConfig.appSecret && algoliaConfig.appSecret.length > 0 ? algoliaConfig.appSecret : process.env.ALGOLIA_SECRET

        let siteKey = Object.keys(_.pickBy(config.collections, o => {return _.isEqual(o, site)} )).toString()
        let jsonFile = getSearchIndexJSON(siteKey, build_path)

        if(fs.existsSync(jsonFile)) {

            console.info('[START Algolia] Syncing index "' + algoliaConfig.indexName + '" for site "' + title + '"')

            let records = JSON.parse(fs.readFileSync(jsonFile, 'utf8'))

            for (var i = 0; i < records.length; i++) {
                records[i].objectID = records[i].path
            }

            const client = algoliasearch(appID, appSecret)
            const index = client.initIndex(algoliaConfig.indexName)
            const chunks = _.chunk(records, 1000)

            chunks.map(batch => {
              return index.addObjects(batch);
            })

            console.info('[END Algolia] Synced ' + records.length + ' records to index "' + algoliaConfig.indexName + '" for site "' + title + '"')
        } else {
            console.error('JSON search index file not found in ' + jsonFile + '. Abandoning Algolia indexing operation for "' + algoliaConfig.indexName + '"')
            process.exit()
        }
    }
}
