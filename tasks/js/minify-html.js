const fs = require('fs-extra')
const glob = require('glob-all')
const minify = require('html-minifier').minify;
const argv = require('yargs').argv

const env = argv.e || argv.env || 'local'

module.exports.minify = () => {

  if (env == 'production') {
    let files = glob.sync(['build_'+env+'/**'])
  
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
