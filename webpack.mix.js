let mix = require('laravel-mix');
let build = require('./tasks/js/build.js');
let tailwind = require('tailwindcss');

mix.disableNotifications()
mix.setPublicPath('source/assets/')
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.blade.php', '*.php', '*.js']),
    ]
});

mix.sass('source/_assets/sass/main.scss', 'css/')
    .options({
        processCssUrls: false,
        postCss: [
          tailwind('tailwind.js'),
        ]
      })
    .js('source/_assets/js/app.js', 'js/')
    .version()

