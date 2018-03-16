const dotenv = require('dotenv').config()
const _ = require('lodash')
const fs = require('fs-extra')
const yargs = require('yargs')
const argv = yargs.argv
const command = require('node-cmd')
const algoliasearch = require('algoliasearch')

const env = argv.e || argv.env || 'local'
const SearchIndexJSONPath = require('../helpers/get-search-index-json-path')

exports.sync = sites => {

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

    command.get('php tasks/php/config -e' + env, (error, stdout, stderr) => {
        if (error) {
            console.log(stderr)
            process.exit(1)
        }

        const config = JSON.parse(stdout)

        for (let obj in sites) {

            let appID = config.search.algolia.appID
            let appSecret = config.search.algolia.appSecret

            let siteName = Object.keys(sites[obj]).toString()
            site = sites[obj][siteName]
            let indexName = _.has(site, 'search.indexName') && site.search.indexName.length > 0 ? site.search.indexName : false

            if (!indexName) {
                console.error('[' + siteName.toUpperCase() + ']', 'No Algolia index defined, skipping...')
                continue
            }

            if ( _.has(site, 'search.appID') ) {
                if (site.search.appID.length > 0) {
                    appID = site.search.appID
                } else {
                    console.log('[' + siteName.toUpperCase() + ']', 'Found "appID" key specified, but it is empty. Using the default ALGOLIA_APP_ID...')
                }
            }

            if ( _.has(site, 'search.appSecret') ) {
                if (site.search.appSecret.length > 0) {
                    appSecret = site.search.appSecret
                } else {
                    console.log('[' + siteName.toUpperCase() + ']', 'Found "appSecret" key specified, but it is empty. Using the default ALGOLIA_APP_SECRET...')
                }
            }

            let jsonFile = SearchIndexJSONPath.get(Object.keys(sites[obj]).toString(), env)

            if(fs.existsSync(jsonFile)) {

                console.info('[START] Algolia: syncing index "' + indexName + '"')

                let records = JSON.parse(fs.readFileSync(jsonFile, 'utf8'))

                for (var i = 0; i < records.length; i++) {
                    records[i].objectID = records[i].path
                }

                let client = algoliasearch(appID, appSecret)
                let index = client.initIndex(indexName)
                let chunks = _.chunk(records, 1000)

                chunks.map(batch => {
                  return index.addObjects(batch);
                })

                console.info('[END] Algolia: added ' + records.length + ' records to Algolia for index "' + indexName + '"')
            } else {
                console.error('JSON search index file not found in ' + jsonFile + '. Abandoning Algolia indexing operation for "' + indexName + '"')
                process.exit()
            }
        }
    })
}
