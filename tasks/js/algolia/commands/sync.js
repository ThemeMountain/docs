const yargs = require('yargs')
const argv = yargs.argv
const path = require('path')
const fs = require('fs-extra')
const command = require('node-cmd')

const AlgoliaService = require('../index')

const env = argv.e || argv.env || 'local'

exports.command = 'sync [sites..]'

exports.describe = `Sync your search indices to Algolia.
                    \nSync all sites: npm run algolia sync
                    \nTo sync only certain sites, specify each site key separated by a space: npm run algolia sync firstSite secondSite`

exports.handler = (argv) => {

  const config = JSON.parse( fs.readFileSync( path.resolve(process.cwd(), 'source/_config.json') ) )

  if (argv.sites.length > 0) {
      let sites = []

      argv.sites.map((site) => {
          if (!config.collections[site]) {
              console.error('"' + site + '" is not a site defined in your collections. Skipping Algolia sync for it...')
              return
          }

          sites.push(config.collections[site])
      })

      return AlgoliaService.sync(sites)
  }

  return AlgoliaService.sync(config.collections)
}
