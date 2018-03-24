const fs = require('fs-extra')
const path = require('path')
const glob = require('glob-all')
const cheerio = require('cheerio')
const argv = require('yargs').argv
const command = require('node-cmd')
const plaintext = require('html2plaintext')
const _ = require('lodash')

const AlgoliaSync = require('./algolia/index')

const env = argv.e || argv.env || 'local'

module.exports.run = () => {
    command.get('php tasks/php/config -e' + env, (error, stdout, stderr) => {
        if (error) {
            console.log(stderr)
            process.exit(1)
        }

        const config = JSON.parse(stdout)
        const sites = config.collections
        const build_path = 'build_' + env

        let data = []
        let algoliaSyncOnBuildSites = []
        let pageUrl, indexJSON

        for (let s in sites) {
            const name = s
            const site = sites[s]

            const sitePath = site.group ? path.join(build_path, site.group, name) : path.join(build_path, name)

            if (fs.existsSync(sitePath)) {

                let files = glob.sync([sitePath + '/**/*.html'])
                indexJSON = sitePath + '\\data\\search-index.json'

                if (files.length) {
                    fs.outputFileSync(indexJSON, '')

                    for (let i = 0; i < files.length; i++) {

                        if (site.pretty || !site.pretty && config.pretty) {
                            pageUrl = _.replace(path.parse(files[i]).dir, build_path + '/', '')
                        }
                        if (!site.pretty && !config.pretty) {
                            let parsed = path.parse(files[i])
                            pageUrl = _.replace(parsed.dir + '/' + parsed.base, build_path + '/', '')
                        }

                        let out = fs.openSync(indexJSON, 'rs+')
                        let $ = cheerio.load( fs.readFileSync(files[i]) )

                        data.push({
                            title: $('title').text(),
                            description: $('meta[name="description"]').attr('content'),
                            keywords: $('meta[name="keywords"]').attr('content'),
                            body: _.truncate(plaintext($('.content').text()), {'length': 200, 'omission': ''}),
                            path: pageUrl
                        });

                        let json = JSON.stringify(data, null, false ? 0 : 2)
                        fs.writeSync(out, json + '\n')
                        fs.closeSync(out)

                    }

                    data = []
                }
            }

            if ( !_.has(site, 'search') || site.search == 'offline') {
                let indexJS = _.replace(indexJSON, '.json', '.js')
                fs.outputFile(indexJS, 'window.data = ' + fs.readFileSync(indexJSON))
            }

            if (_.has(site.search, 'algolia')) {
                algoliaSyncOnBuildSites.push(site)
            }
        }

        if (algoliaSyncOnBuildSites.length > 0 && ['production', 'offline'].indexOf(env) > -1) { // TODO: sync only in production, not offline too!
            AlgoliaSync.sync(algoliaSyncOnBuildSites, config)
        }
    })
}
