const fs = require('fs-extra')
const path = require('path')
const cheerio = require('cheerio')
const argv = require('yargs').argv

const env = argv.e || argv.env || 'local'

module.exports.fixPaths = (build_path) => {

  if (env == 'offline') {

    const config = JSON.parse(fs.readFileSync('./source/_assets/data/config.json') )
    const collections = JSON.parse(fs.readFileSync('./source/_assets/data/collections.json') )
    const imgFolder = 'img'

    for (let key in collections) {
      const pages = collections[key]
      const site = config.collections[key]

      for (let p in pages) {

        let page = pages[p]
        let filePath = path.resolve(build_path + page._meta.path[0])

        let cleanPath = path.dirname(page._meta.path[0]).split('/').filter(item => {return item.length > 0})
        let toReplace = '/' + imgFolder + '/' + cleanPath.join('/')

        let levels = cleanPath.map(item => { return '..' }).join('/') + '/' + imgFolder + path.dirname(page._meta.path[0])

        let $ = cheerio.load(fs.readFileSync(filePath))

        $('img').map(function(i, el) {
          // this === el
          let src = $(this).attr('src')
          src = src.replace(toReplace, levels)

          return $(this).attr('src', src);
        })

        fs.outputFile(filePath, $.html(), (err) => {
            if (err) throw err;
        });
      }
    }

  }

}
