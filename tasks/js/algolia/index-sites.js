const yargs = require('yargs')
const argv = yargs.argv
const command = require('node-cmd')

const SearchIndexJSONPath = require('../helpers/get-search-index-json-path')
const SitesFromArgv = require('../helpers/get-algolia-sites-argv')
const AlgoliaIndex = require('./algolia-sync')

const env = argv.e || argv.env || 'local'

exports.command = 'sync:sites <sites..>'

exports.describe = 'Sync index for the specified Algolia Search-enabled sites.'

exports.handler = argv => {

  command.get('php tasks/php/config -e' + env, (error, stdout, stderr) => {
      if (error) {
          console.log(stderr)
          process.exit(1)
      }

      const config = JSON.parse(stdout)

      let sites = SitesFromArgv.get(config.docs, argv.sites)

      AlgoliaIndex.sync(sites)

  })
}
