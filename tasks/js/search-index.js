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
        const build_path = config.build.destination

        let data = []
        let folders = fs.readdirSync(build_path).filter(f => fs.statSync(path.join(build_path, f)).isDirectory())

        folders.forEach(folder => {

            let files = glob.sync([build_path + '/' + folder + '/**/*.html'])
            let indexJSON = build_path + '/' + folder + '/data/search-index.json'
            let indexJS = build_path + '/' + folder + '/data/search-index.js'

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
                        fs.outputFile(indexJS, 'const data = ' + fs.readFileSync(indexJSON))
                    })
                    .catch(err => {
                        console.error(err)
                    })

            }

        })

    })

}
