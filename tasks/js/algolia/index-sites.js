const yargs = require('yargs')
const argv = yargs.argv
const command = require('node-cmd')

const SearchIndexJSONPath = require('../helpers/get-search-index-json-path')
const SitesFromArgv = require('../helpers/get-algolia-sites-argv')
const AlgoliaIndex = require('./algolia-sync')

const env = argv.e || argv.env || 'local'

exports.command = 'sync:sites <sites..>'

exports.describe = `Sync the search index for specified sites only.
                    \nMultiple sites need to be separated by a space. Example: npm run algolia sync:sites firstSite secondSite
                    \nFor site groups, use dot notation. Example: npm run algolia sync:sites groupName.siteName`

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
