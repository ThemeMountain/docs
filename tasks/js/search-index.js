const fs = require('fs-extra')
const path = require('path')
const glob = require('glob-all')
const cheerio = require('cheerio')
const argv = require('yargs').argv
const command = require('node-cmd')
const plaintext = require('html2plaintext')

const env = argv.e || argv.env || 'local'

truncate = (str, max) => {
  return str.length > max ? str.substr(0, max-1) : str
}

module.exports.buildIndexes = () => {
    command.get('php tasks/php/config -e' + env, (error, stdout, stderr) => {
        if (error) {
            console.log(stderr)
            process.exit(1)
        }

        const config = JSON.parse(stdout)
        const build_path = 'build_' + env

        let data = []
        let sites = config.docs

        for (let key in sites) {

            let p = path.join(build_path, sites[key].path)

            if ( sites[key].hasOwnProperty('search') && sites[key].search == 'algolia' ) {
                console.info(sites[key].title, ': skipping search index build, site is configured to use Algolia DocSearch.')
                return
            }

            if (fs.existsSync(p)) {

                let files = glob.sync([p + '/**/*.html'])
                let indexJSON = p + '/data/' + config.search.drivers.online

                if (files.length) {

                    fs.outputFile(indexJSON, '')
                        .then(() => {

                            files.forEach(file => {

                                let out = fs.openSync(indexJSON, 'w+')
                                let $ = cheerio.load( fs.readFileSync(file) )

                                data.push({
                                    title: $('title').text(),
                                    description: $('meta[name="description"]').attr('content'),
                                    keywords: $('meta[name="keywords"]').attr('content'),
                                    preview: truncate( plaintext($('.content').text()), 100).trim()
                                });

                                let json = JSON.stringify(data, null, false ? 0 : 2)
                                fs.writeSync(out, json + '\n')
                                fs.closeSync(out)

                            })

                            data = []

                        })
                        .then(() => {
                            if ( sites[key].hasOwnProperty('search') && sites[key].search == 'online' ) {
                            } else {
                                let indexJS = p + '/data/' + config.search.drivers.offline
                                fs.outputFile(indexJS, 'window.data = ' + fs.readFileSync(indexJSON))
                                fs.unlinkSync(indexJSON)
                            }
                        })
                        .catch(err => {
                            console.error(err)
                        })

                }

            }

        }

    })

}
