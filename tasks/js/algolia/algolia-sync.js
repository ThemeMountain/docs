const dotenv = require('dotenv').config()
const _ = require('lodash')
const fs = require('fs-extra')
const yargs = require('yargs')
const argv = yargs.argv
const algoliasearch = require('algoliasearch')

const env = argv.e || argv.env || 'local'
const SearchIndexJSONPath = require('../helpers/get-search-index-json-path')

exports.sync = sites => {

    if (dotenv.error) {
        console.log('No .env file found, please create it from .env.example and add your Algolia credentials.')
        process.exit()
    }

    if (!process.env.ALGOLIA_APP_ID && !process.env.ALGOLIA_API_KEY) {
        console.log('Please first set your Algolia credentials in .env')
        process.exit()
    }

    if (!sites) {
        console.error('Sites object was malformed or not provided to the Algolia sync tool. Sync aborted.')
        process.exit()
    }

    for (let site in sites) {

        let siteName = Object.keys(sites[site]).toString()
        let algoliaIndexName = sites[site][siteName].search.indexName
        let jsonFile = SearchIndexJSONPath.get(Object.keys(sites[site]).toString(), env)

        if(fs.existsSync(jsonFile)) {

            console.info('[START] Algolia: syncing index "' + algoliaIndexName + '"')

            let records = JSON.parse(fs.readFileSync(jsonFile, 'utf8'))

            // Dynamically add record 'url' key as the 'objectID' for Algolia, so we don't duplicate data
            for (var i = 0; i < records.length; i++) {
                records[i].objectID = records[i].url
            }

            const client = algoliasearch(process.env.ALGOLIA_APP_ID, process.env.ALGOLIA_API_KEY)
            const index = client.initIndex(algoliaIndexName)
            let chunks = _.chunk(records, 1000)

            chunks.map(batch => {
              return index.addObjects(batch);
            })

            console.info('[END] Algolia: added ' + records.length + ' records to Algolia for index "' + algoliaIndexName + '"')
        } else {
            console.error('JSON search index file not found in ' + jsonFile + '. Abandoning Algolia indexing operation for "' + algoliaIndexName + '"')
            process.exit()
        }
    }

}
