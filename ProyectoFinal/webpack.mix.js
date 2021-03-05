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

// mix.js('resources/js/app.js', 'public/js')
//     .js(,'public/js')
//     .js('resources/template/js/Chart.min.js','public/js')
//     .js('resources/template/js/dashboard.js','public/js')
//     .js('resources/template/js/feather.js','public/js')
//     .css('resources/template/css/bootstrap.min.css', 'public/css')
//     .css('resources/template/css/dashboard.css','public/css')
//     .css('resources/template/css/fontawesome.css','public/css')
    
mix.scripts([
        'resources/Template/js/bootstrap.js',
        'resources/Template/js/Chart.min.j',
        'resources/Template/js/dashboard.js',
        'resources/Template/js/feather.js',
    ],'public/js/app.js')

    .styles([
        'resources/Template/css/bootstrap.min.css',
        'resources/Template/css/dashboard.css',
        'resources/Template/css/fontawesome.css'
    ],'public/css/app.css');
