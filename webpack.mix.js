let fs = require('fs');
let argv = require('yargs').argv;
let command = require('node-cmd');
let mix = require('laravel-mix');
let jigsaw = require('./tasks/bin');

let AfterBuild = require('on-build-webpack');
let BrowserSync = require('browser-sync');
let BrowserSyncPlugin = require('browser-sync-webpack-plugin');
let Watch = require('webpack-watch');
let SearchIndex = require('./tasks/search-index');

const env = argv.e || argv.env || 'local';
const port = argv.p || argv.port || 3000;

let config;
let browserSyncInstance;

let plugins = [
    new AfterBuild(() => {

        command.get('php tasks/getconfig -e' + env, (error, stdout, stderr) => {
            config = error ? null : JSON.parse(stdout);

            let pretty = (typeof config !== 'undefined' && config.pretty == false) ? '--pretty=false ' : '';

            command.get(jigsaw.path() + ' build ' + pretty + env, (error, stdout, stderr) => {
                console.log(error ? stderr : stdout);

                SearchIndex.rebuild();

                if (browserSyncInstance) {
                    browserSyncInstance.reload();
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
            browserSyncInstance = BrowserSync.get('bs-webpack-plugin');
        },
    }),

    new Watch({
        paths: ['source/**/*.md', 'source/**/*.php', '*.php', '*.js'],
        options: { ignoreInitial: true }
    }),
];

mix.webpackConfig({ plugins });
mix.disableNotifications();
mix.setPublicPath('source');
