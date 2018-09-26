let mix = require('laravel-mix');
require('laravel-mix-purgecss');
let build = require('./tasks/js/build.js');
let tailwind = require('tailwindcss');

let argv = require('yargs').argv;
let keyfinder = require('keyfinder');
let execSync = require('child_process').execSync;

mix.disableNotifications()
mix.setPublicPath('source/assets/')
mix.webpackConfig({
  plugins: [
    build.jigsaw,
    build.browserSync(),
    build.watch(['source/**/*.md', '*.php', '*.js', 'source/**/*.scss', '!source/**/_tmp/*', '!vendor/**/*', '!node_modules/**/*']),
  ]
});

let env = argv.e || argv.env || 'local';
let config = JSON.parse(execSync('php ./tasks/php/config -e' + env));
let colors = keyfinder(config, 'color').filter((v, i, a) => a.indexOf(v) === i).join('|');
let purgeCssWhitelist = new RegExp(colors);

mix.sass('source/_assets/sass/main.scss', 'css/')
  .options({
    processCssUrls: false,
    postCss: [
      tailwind('tailwind.js'),
    ]
  })
  .purgeCss({
    folders: ['source'],
    extensions: ['html', 'md', 'php', 'vue', 'svg'],
    whitelistPatterns: [purgeCssWhitelist, /pre/, /code/, /copy/, /a(lgoli)?a/, /w-3\/5/]
  })
  .js('source/_assets/js/app.js', 'js/')
  .version()

