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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/scripts/buttons.js', 'public/js')
    .js('resources/scripts/script.js', 'public/js')
    .js('resources/scripts/slider.js', 'public/js')
    .js('resources/scripts/tabs.js', 'public/js')
    .js('resources/js/modalForm.js', 'public/js/modalForm.js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css').version()
    .css ('resources/css/style.css','public/css').version()
    .css ('resources/css/modalForm.css','public/css/modalForm.css').version();
