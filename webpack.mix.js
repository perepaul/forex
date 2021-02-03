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

mix
// .js('resources/js/app.js', 'public/js')
// .postCss('resources/css/app.css', 'public/css', [
//     //
// ]);
    .autoload({
        jquery: ['$', 'window.jQuery', "jQuery", "window.$", "jquery", "window.jquery"]
    })
    .postCss('resources/css/user/style.css', 'public/css/user/app.css', [])
    .js('resources/js/user/scripts.js', 'public/js/user/app.js')
    .copy('resources/icons', 'public/icons')
    .copy('resources/images', 'public/images')

/**
 * admin assets here
 */
.js('resources/js/admin/app.js', 'public/js/admin/app.js')
    .postCss('resources/css/admin/app.css', 'public/css/admin/app.css', [])
    .copy('resources/css/admin/fonts', 'public/css/admin/fonts')