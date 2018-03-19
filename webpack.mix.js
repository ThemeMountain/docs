let mix = require('laravel-mix');
let build = require('./tasks/js/build.js');
let tailwind = require('tailwindcss');
require('laravel-mix-purgecss');

mix.disableNotifications()
mix.setPublicPath('source/assets/')
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.scss', '*.php', '*.js']),
    ]
});


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

