const mix = require('laravel-mix');
mix.browserSync({
    proxy: 'http://localhost:1500'
});
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/sitescript.js', 'public/frontend/js')
    .sass('resources/sass/fontawes.scss', 'public/frontend/css')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/sitestyle.scss', 'public/css')
    .sourceMaps();
// are u with me
