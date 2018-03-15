const yargs = require('yargs')
const argv = yargs.argv
const command = require('node-cmd')

const AlgoliaSites = require('../helpers/get-algolia-sites')
const SearchIndexJSONPath = require('../helpers/get-search-index-json-path')
const AlgoliaIndex = require('./algolia-sync')

const env = argv.e || argv.env || 'local'

exports.command = 'sync:all'

exports.describe = 'Sync index for all Algolia Search-enabled sites.'

exports.handler = argv => {

    command.get('php tasks/php/config -e' + env, (error, stdout, stderr) => {
        if (error) {
            console.log(stderr)
            process.exit(1)
        }

        const config = JSON.parse(stdout)

        let sites = AlgoliaSites.get(config.docs)

        AlgoliaIndex.sync(sites)

    })
}
