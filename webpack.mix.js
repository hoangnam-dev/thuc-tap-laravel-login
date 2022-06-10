const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/sass/app.scss', 'public/assets/css')
    .sass('resources/sass/plugins.scss', 'public/assets/css')
    .sass('resources/sass/plugins.dark.scss', 'public/assets/css')
    .sass('resources/sass/style.dark.scss', 'public/assets/css')
    .sass('resources/sass/style.react.scss', 'public/assets/css')
    .sass('resources/sass/style.scss', 'public/assets/css')
;

mix.js('resources/js/app.js', 'public/assets/js')
mix.js('resources/js/main.js', 'public/assets/js')
;
