const fs = require('fs-extra')
const argv = require('yargs').argv
const command = require('node-cmd')
const mix = require('laravel-mix')
const jigsaw = require('./tasks/js/bin')
const tailwind = require('tailwindcss')
require('laravel-mix-purgecss')

const AfterBuild = require('on-build-webpack')
const BrowserSync = require('browser-sync')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const Watch = require('webpack-watch')
const Search = require('./tasks/js/search-index')

const env = argv.e || argv.env || 'local'
const port = argv.p || argv.port || 3000

let config
let browserSyncInstance

const plugins = [
    new AfterBuild(() => {

        command.get('php tasks/php/config -e' + env, (error, stdout, stderr) => {
            if (error) {
                console.log(stderr)
                process.exit(1)
            }

            config = error ? null : JSON.parse(stdout)

            let pretty = (config && config.pretty == false) ? '--pretty=false ' : ''

            command.get(jigsaw.path() + ' build ' + pretty + env, (error, stdout, stderr) => {
                console.log(error ? stderr : stdout)

                Search.buildIndexes()

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
        callback: function() {
            browserSyncInstance = BrowserSync.get('bs-webpack-plugin')
        },
    }),

    new Watch({
        paths: ['source/**/*.md', 'source/**/*.php', '*.php', '*.js'],
        options: { ignoreInitial: true }
    }),
]

mix.webpackConfig({ plugins })
mix.disableNotifications()
mix.setPublicPath('source/assets/')

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
