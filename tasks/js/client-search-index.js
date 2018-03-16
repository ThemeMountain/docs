const fs = require('fs-extra')
const path = require('path')
const glob = require('glob-all')
const cheerio = require('cheerio')
const argv = require('yargs').argv
const command = require('node-cmd')
const plaintext = require('html2plaintext')
const _ = require('lodash')

const AlgoliaSites = require('./helpers/get-algolia-sites')
const AlgoliaIndex = require('./algolia/algolia-sync')

const env = argv.e || argv.env || 'local'

module.exports.run = () => {
    command.get('php tasks/php/config -e' + env, (error, stdout, stderr) => {
        if (error) {
            console.log(stderr)
            process.exit(1)
        }

        const config = JSON.parse(stdout)
        const build_path = 'build_' + env

        let data = []
        let sites = []
        let paths = []

        for (let key in config.docs) {

            let categories = config.docs[key]
            let items = _.keysIn(categories)

            for (let i = 0; i < items.length; i++) {
                let itemObject = typeof _.get(categories, items[i]) == 'object' ? _.get(categories, items[i]) : _.get(config.docs, key)
                let p = path.join(build_path, 'docs/' + key + (_.has(itemObject, items[i]) ? '' : '/' + items[i]) )
                sites.push(p)
                paths.push(p)
            }
        }

        paths = _.uniqBy(paths, e => {return e})
        sites = _.uniqBy(sites, e => {return e})

        let filePath, indexJSON, indexJS
        for (let i = 0; i < paths.length; i++) {
            if (fs.existsSync(paths[i])) {

                let files = glob.sync([paths[i] + '/**/*.html'])
                indexJSON = paths[i] + '\\data\\search-index.json'

                if (files.length) {

                    fs.outputFileSync(indexJSON, '')

                    for (let i = 0; i < files.length; i++) {

                        if (config.pretty) {
                            filePath = _.replace(path.parse(files[i]).dir, build_path + '/', '')
                        } else {
                            let parsed = path.parse(files[i])
                            filePath = _.replace(parsed.dir + '/' + parsed.base, build_path + '/', '')
                        }

                        let out = fs.openSync(indexJSON, 'rs+')
                        let $ = cheerio.load( fs.readFileSync(files[i]) )

                        data.push({
                            title: $('title').text(),
                            description: $('meta[name="description"]').attr('content'),
                            keywords: $('meta[name="keywords"]').attr('content'),
                            body: _.truncate(plaintext($('.content').text()), {'length': 200, 'omission': ''}),
                            path: filePath
                        });

                        let json = JSON.stringify(data, null, false ? 0 : 2)
                        fs.writeSync(out, json + '\n')
                        fs.closeSync(out)

                    }

                    data = []
                }
            }

        }

        indexJS = _.replace(indexJSON, '.json', '.js')
        fs.outputFile(indexJS, 'window.data = ' + fs.readFileSync(indexJSON))

        // Auto-sync to Algolia
        let algoliaSites = AlgoliaSites.get(config.docs)
        let syncOnBuildSites = []

        for (var j = 0; j < algoliaSites.length; j++) {
           let site = _.pickBy(algoliaSites[j], o => { return _.has(o, 'search') && o.search.syncOnBuild } )

           if (!_.isEmpty(site)) {
            console.log()
            syncOnBuildSites.push(site)
           }
        }

        if (!_.isEmpty(syncOnBuildSites) && env == 'production') {
            AlgoliaIndex.sync(syncOnBuildSites)
        }

    })
}
