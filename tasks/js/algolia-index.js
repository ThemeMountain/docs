#! /usr/bin/env node

const dotenv = require('dotenv').config()
const _ = require('lodash')
const path = require('path')
const fs = require('fs-extra')
const glob = require('glob-all')
const yargs = require('yargs')
const argv = yargs.argv
const command = require('node-cmd')
const algoliasearch = require('algoliasearch')

const env = argv.e || argv.env || 'local'

if (dotenv.error) {
    console.log('No .env file found, please create it from .env.example and add your Algolia credentials.')
    process.exit()
}

yargs.command('index <docs> <index>', 'Upload search index to your Algolia account.', () => {}, (argv) => {

    if (!process.env.ALGOLIA_APP_ID && !process.env.ALGOLIA_API_KEY) {
        console.log('Please first set your Algolia credentials in .env')
        process.exit()
    }

    command.get('php tasks/php/config -e' + env, (error, stdout, stderr) => {
        if (error) {
            console.log(stderr)
            process.exit(1)
        }

        const config = JSON.parse(stdout)

        console.log(config)
        process.exit()

        const client = algoliasearch(process.env.ALGOLIA_APP_ID, process.env.ALGOLIA_API_KEY)
        const index = client.initIndex(argv.index)

        let parts = argv.docs.split('.')
        let category = parts[0]
        let site = parts[1]
        let pathPrefix = 'build_' + env + '/docs/'
        let docsPath = (typeof site !== 'undefined') ? category + '/' + site : category
        docsPath = path.join(pathPrefix, docsPath)

        if (fs.existsSync(docsPath)) {

            let indexJSON = path.join(docsPath, '/data/search-index.json')

            if (fs.existsSync(indexJSON)) {

                const records = JSON.parse(fs.readFileSync(indexJSON, 'utf8'))
                const chunks = _.chunk(records, 1000)

                chunks.map(batch => {
                  return index.addObjects(batch);
                })

                console.log('All done, added ' + records.length + ' records to Algolia')

            } else {
                console.error('JSON search index file not found in', indexJSON + '. Abandoning Algolia indexing operation...')
                process.exit()
            }

        }
    })

  }).argv



