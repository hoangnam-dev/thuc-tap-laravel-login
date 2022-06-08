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

/*
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
*/

var assets = {
    css: 'public/assets/css',
    js: 'public/assets/js',
}

mix.sass('resources/sass/app.scss', assets.css)
    .sass('resources/sass/plugins.scss', assets.css)
    .sass('resources/sass/plugins.dark.scss', assets.css)
    .sass('resources/sass/style.scss', assets.css)
    .sass('resources/sass/style.dark.scss', assets.css)
    .sass('resources/sass/style.react.scss', assets.css)
;
