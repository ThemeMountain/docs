const path = require('path')
const glob = require('glob-all')

exports.get = (site, env) => {
   let sitesBuildPath = 'build_' + env + '/docs'
   let file = glob.sync([sitesBuildPath + '/**/'+site+'/**/search-index.json'])

   return path.normalize(file.toString())
}
