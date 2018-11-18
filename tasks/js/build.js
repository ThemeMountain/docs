let bin = require('./bin')
let argv = require('yargs').argv
let command = require('node-cmd')
let execSync = require('child_process').execSync

let AfterWebpack = require('on-build-webpack')
let BrowserSync = require('browser-sync')
let BrowserSyncPlugin = require('browser-sync-webpack-plugin')
let Watch = require('webpack-watch')

let SearchIndexer = require('./build-search-index')
let HTMLMinifier = require('./minify-html')

let browserSyncInstance
let env = argv.e || argv.env || 'local'
let port = argv.p || argv.port || 3000

let config = JSON.parse(execSync('php ./tasks/php/config -e' + env))
let pretty = (config.pretty == false) ? '--pretty=false ' : ''
let build_path = config.build.destination || 'build_' + env

module.exports = {
  jigsaw: new AfterWebpack(() => {
    command.get(bin.path() + ' build ' + pretty + env, (error, stdout, stderr) => {
      if(error) {
        console.log('\nJigsaw build failed.\n', stderr)
        process.exit(1)
      }
      console.log(stdout)

      SearchIndexer.run(env)
      HTMLMinifier.minify(build_path, env)

      if (browserSyncInstance) {
        browserSyncInstance.reload()
      }
    });
  }),

  watch: (paths) => {
    return new Watch({
      options: { ignoreInitial: true },
      paths: paths,
    })
  },

  browserSync: (proxy) => {
    return new BrowserSyncPlugin({
      notify: false,
      port: port,
      proxy: proxy,
      tunnel: config.tunnel || false,
      server: proxy ? null : { baseDir: build_path },
    },
    {
      reload: false,
      callback: () => {
        browserSyncInstance = BrowserSync.get('bs-webpack-plugin');
      },
    })
  },
};
