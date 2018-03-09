let fs = require('fs');
let path = require('path');
let glob = require("glob-all");
let cheerio = require('cheerio');
let argv = require('yargs').argv;

const env = argv.e || argv.env || 'local';

module.exports = {
    rebuild: function() {

        const build_path = 'build_' + env;

        let data = [];
        let files = glob.sync([build_path+"/**/*.html"]);

        if(files) {
            files.forEach((file) => {

                let key = path.parse(file)['dir'].split('/').pop();
                let $ = cheerio.load( fs.readFileSync(file) );

                key = key == build_path ? 'home' : key;

                data.push({
                    title: $('title').text(),
                    description: $('meta[name="description"]').attr('content'),
                    keywords: $('meta[name="keywords"]').attr('content')
                });

                 const json = JSON.stringify(data, null, false ? 0 : 2);
                 const out = fs.openSync('source/_data/search-index.json', 'w+');
                 fs.writeSync(out, json + '\n');
                 fs.closeSync(out);

            })
        }

        if (!fs.existsSync(build_path + '/data')){
            fs.mkdirSync(build_path + '/data');
        }
        fs.copyFileSync('source/_data/search-index.json', build_path + '/data/search-index.json');

    }
};
