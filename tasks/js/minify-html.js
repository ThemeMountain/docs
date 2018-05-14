const fs = require('fs-extra')
const glob = require('glob-all')
const minify = require('html-minifier').minify
const argv = require('yargs').argv

const env = argv.e || argv.env || 'local'

module.exports.minify = (build_path) => {

  if (env == 'production') {
    let files = glob.sync([build_path+'/**'])

    files = files.filter((file) => {
      return file.includes('.html')
    })

    files.map((file) => {
      let html = fs.readFileSync(file, 'utf8')
      let htmlMinified = minify(html, {
        collapseWhitespace: true
      })

      fs.writeFileSync(file, htmlMinified)
    })
  }
}
