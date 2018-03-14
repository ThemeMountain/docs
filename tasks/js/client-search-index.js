const fs = require('fs-extra')
const path = require('path')
const glob = require('glob-all')
const cheerio = require('cheerio')
const argv = require('yargs').argv
const command = require('node-cmd')
const plaintext = require('html2plaintext')
const _ = require('lodash')

const env = argv.e || argv.env || 'local'

module.exports.index = () => {
    command.get('php tasks/php/config -e' + env, (error, stdout, stderr) => {
        if (error) {
            console.log(stderr)
            process.exit(1)
        }

        const config = JSON.parse(stdout)
        const build_path = 'build_' + env

        let data = []
        let sites = config.docs
        let paths = []

        for (let key in sites) {

             let categories = sites[key]
             let items = _.keysIn(categories)

             _.forEach(items, (item) => {

                let itemObject = typeof _.get(categories, item) == 'object' ? _.get(categories, item) : _.get(sites, key)
                let p = path.join(build_path, 'docs/' + key + (_.has(itemObject, item) ? '' : '/' + item) )

                paths.push(p)

            })
        }

        paths = _.uniqBy(paths, e => {return e})

        _.forEach(paths, p => {

            if (fs.existsSync(p)) {

                let files = glob.sync([p + '/**/*.html'])
                let indexJSON = p + '/data/' + config.search.drivers.online

                if (files.length) {

                    fs.outputFile(indexJSON, '')
                        .then(() => {

                            files.forEach(file => {

                                let out = fs.openSync(indexJSON, 'rs+')
                                let $ = cheerio.load( fs.readFileSync(file) )

                                data.push({
                                    title: $('title').text(),
                                    description: $('meta[name="description"]').attr('content'),
                                    keywords: $('meta[name="keywords"]').attr('content'),
                                    preview: _.truncate(plaintext($('.content').text()), {'length': 200, 'omission': ''})
                                });

                                let json = JSON.stringify(data, null, false ? 0 : 2)
                                fs.writeSync(out, json + '\n')
                                fs.closeSync(out)

                            })

                            data = []

                        })
                        .then(() => {
                            let indexJS = p + '/data/' + config.search.drivers.offline
                            fs.outputFile(indexJS, 'window.data = ' + fs.readFileSync(indexJSON))
                        })
                        .catch(err => {
                            console.error(err)
                        })
                }
            }
        })
    })
}
