const fs = require('fs-extra')
const fm = require('front-matter')
const path = require('path')
const removeMd = require('remove-markdown')
const AlgoliaSync = require('./algolia/index')

module.exports.run = (env) => {

  const config = JSON.parse(fs.readFileSync('./source/_assets/data/config.json') )
  const collections = JSON.parse(fs.readFileSync('./source/_assets/data/collections.json') )
  const build_path = config.build.destination
  let algoliaSites = []

  for (let key in collections) {

    let data = []

    const pages = collections[key]
    const site = config.collections[key]

    for (let p in pages) {

      let page = pages[p]
      let filePath = path.join(page._meta.source, page._meta.filename + '.' + page._meta.extension)

      if(fs.existsSync(filePath)) {

        let fileData = fs.readFileSync(filePath, 'utf8')
        contents = fm(fileData)

        // search explicitly set to false in FrontMatter for this page, exclude it from indexing
        if(contents.attributes.hasOwnProperty('search') && !contents.attributes.search) {
          continue
        }

        let bodyPlaintext = removeMd(contents.body)

        data.push({
          title: page.title,
          description: page.description,
          keywords: page.tags,
          body: bodyPlaintext.substring(0, 1000),
          path: page._meta.path[0]
        })
      }
    }

    let JSONSearchFile = path.resolve(build_path+'/data/'+key+'/search-data.json')
    fs.ensureFileSync(JSONSearchFile)
    fs.writeFileSync(JSONSearchFile, JSON.stringify(data))

    // Create .js search index where needed
    if(!site.hasOwnProperty('search') || site.search == 'offline') {
      let JSSearchFile = JSONSearchFile.replace('.json', '.js')
      fs.ensureFileSync(JSSearchFile)
      fs.outputFile(JSSearchFile, 'window.searchData = ' + JSON.stringify(data))
    }

    // Add site to Algolia sync list
    if(site.hasOwnProperty('search') && site.search.hasOwnProperty('algolia')) {
      algoliaSites.push(site)
    }

    data = []
  }

  // Sync to Algolia in production build
  if (algoliaSites.length > 0 && env == 'production') {
    AlgoliaSync.sync(algoliaSites)
  }
}
