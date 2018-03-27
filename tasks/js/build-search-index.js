const fs = require('fs-extra')
const fm = require('front-matter')
const path = require('path')
// const glob = require('glob-all')
const removeMd = require('remove-markdown')
// const cheerio = require('cheerio')
const argv = require('yargs').argv
// const command = require('node-cmd')
// const plaintext = require('html2plaintext')
// const _ = require('lodash')

const AlgoliaSync = require('./algolia/index')

const env = argv.e || argv.env || 'local'

module.exports.run = () => {

    const config = JSON.parse( fs.readFileSync('./source/_config.json') )
    const collections = JSON.parse( fs.readFileSync('./source/_collections.json') )
    const build_path = 'build_' + env
    let algoliaSyncOnBuildSites = []

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

                // search explicitly set to false for this page, exclude it from indexing
                if(contents.attributes.hasOwnProperty('search') && !contents.attributes.search) {
                    continue
                }

                let bodyPlaintext = removeMd(contents.body)

                data.push({
                    title: page.title,
                    description: page.description,
                    keywords: page.tags,
                    body: bodyPlaintext,
                    path: page._meta.url[0]
                })
            }
        }

        let JSONSearchFile = path.resolve(build_path+'/data/'+key+'/search-data.json')
        fs.ensureFileSync(JSONSearchFile)
        fs.writeFileSync(JSONSearchFile, JSON.stringify(data))

        // Create .js search index
        if(!site.hasOwnProperty('search') || site.search == 'offline') {
            let JSSearchFile = JSONSearchFile.replace('.json', '.js')
            fs.ensureFileSync(JSSearchFile)
            fs.outputFile(JSSearchFile, 'window.searchData = ' + JSON.stringify(data))
        }

        // Add site to Algolia sync list
        if(site.hasOwnProperty('search') && site.search.hasOwnProperty('algolia')) {
            algoliaSyncOnBuildSites.push(site)
        }

        data = []
    }

    // Sync indices to Algolia on build
    if (algoliaSyncOnBuildSites.length > 0 && env == 'production') {
        AlgoliaSync.sync(algoliaSyncOnBuildSites, config)
    }
}
