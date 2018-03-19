const fs = require('fs-extra')
const argv = require('yargs').argv
const ngrok = require('ngrok')
const mix = require('laravel-mix')
const command = require('node-cmd')
const jigsaw = require('./tasks/js/bin')
const tailwind = require('tailwindcss')
require('laravel-mix-purgecss')

const AfterBuild = require('on-build-webpack')
const BrowserSync = require('browser-sync')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const Watch = require('webpack-watch')
const SearchIndexer = require('./tasks/js/client-search-index')

const env = argv.e || argv.env || 'local'
const port = argv.p || argv.port || 3000

let config
let browserSyncInstance

/*
|--------------------------------------------------------------------------
| Code and Tell (ngrok localhost tunnel)
|--------------------------------------------------------------------------
|
| DocsFlow allows you to expose your localhost to the web when developing.
| This means you can share a live preview URL of what you're working on
| with anyone in the world. Works only when using 'npm run watch'.
|
*/

const tunnel = false

/*
|--------------------------------------------------------------------------
| Webpack Plugins
|--------------------------------------------------------------------------
*/

const plugins = [
    new AfterBuild(() => {

        command.get('php tasks/php/config -e' + env, (error, stdout, stderr) => {
            if (error) {
                console.log(stderr)
                process.exit(1)
            }

            config = JSON.parse(stdout)

            let pretty = (config && config.pretty == false) ? '--pretty=false ' : ''

            command.get(jigsaw.path() + ' build ' + pretty + env, (error, stdout, stderr) => {
                console.log(error ? stderr : stdout)

                SearchIndexer.run()

                if (browserSyncInstance) {
                    browserSyncInstance.reload()
                }
            });
        });

    }),

    new BrowserSyncPlugin({
        proxy: null,
        port: port,
        server: { baseDir: 'build_' + env },
        notify: false,
    },
    {
        reload: false,
        callback: () => {
            browserSyncInstance = BrowserSync.get('bs-webpack-plugin')

            if (tunnel) {
                ngrok.connect(port).then(url => {
                    console.log('Public URL: ' + url)
                })
            }

        },
    }),

    new Watch({
        paths: ['source/**/*.md', 'source/**/*.scss', '*.php', '*.js'],
        options: { ignoreInitial: true }
    }),
]

mix.webpackConfig({ plugins })
mix.disableNotifications()
mix.setPublicPath('source/assets')


mix.js(['source/_assets/js/toggle/toggle.js'], 'js/vendor.js')
    .js('source/_assets/js/app.js', 'js/app.js')
    .version()

mix.sass('source/_assets/sass/main.scss', 'css/')
    .options({
        processCssUrls: false,
        postCss: [
          tailwind('tailwind.js'),
        ]
      })
    .purgeCss({
        globs: [
            path.join(__dirname, "source/**/*.blade.php"),
        ],
    })
    .version()

mix.copy('source/_assets/img', 'source/assets/img', false)

