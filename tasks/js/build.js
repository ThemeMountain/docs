let fs = require('fs-extra');
let argv = require('yargs').argv;
let ngrok = require('ngrok');
let bin = require('./bin');
let command = require('node-cmd');

let AfterWebpack = require('on-build-webpack');
let BrowserSync = require('browser-sync');
let BrowserSyncPlugin = require('browser-sync-webpack-plugin');
let Watch = require('webpack-watch');
let SearchIndexer = require('./build-search-index');
let OfflineImages = require('./offline-images');

let config;
let browserSyncInstance;
let env = argv.e || argv.env || 'local';
let port = argv.p || argv.port || 3000;

module.exports = {
    jigsaw: new AfterWebpack(() => {

        command.get('php ./tasks/php/config -e' + env, (error, stdout, stderr) => {
            if (error) {
                console.log('\nCould not get config, please check the tasks/php/config script.\n', stderr)
                process.exit(1)
            }

            config = JSON.parse(stdout)
            let pretty = (config && config.pretty == false) ? '--pretty=false ' : ''

            command.get(bin.path() + ' build ' + pretty + env, (error, stdout, stderr) => {
                if(error) {
                    console.log('\nJigsaw build failed.\n', stderr)
                    process.exit(1)
                }
                console.log(stdout)

                SearchIndexer.run()
                if (env == 'offline') {
                  OfflineImages.fixPaths()
                }

                if (browserSyncInstance) {
                    browserSyncInstance.reload()
                }
            });
        });
    }),

    watch: paths => {
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
            server: proxy ? null : { baseDir: 'build_' + env + '/' },
        },
        {
            reload: false,
            callback: () => {
                browserSyncInstance = BrowserSync.get('bs-webpack-plugin');

                if (config.broadcast) {
                    ngrok.connect(port).then(url => {
                        console.log('[Browsersync] Public URL: ' + url)
                    })
                }
            },
        })
    },
};
