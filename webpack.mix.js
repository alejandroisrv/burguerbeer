const mix = require('laravel-mix');

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


mix.sass('resources/sass/app.scss', 'public/assets/css/app.css')
    .sass('resources/sass/main.scss', 'public/assets/css/main.css');


mix.js('resources/assets/js/app.js', 'public/assets/js/app.js');


mix.js('resources/assets/js/producto/index.js', 'public/assets/js/producto.js');