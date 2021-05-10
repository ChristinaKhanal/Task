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
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'public/resources/css/theme-default/bootstrap.css',
    // 'public/resources/css/theme-default/materialadmin.css',
    // 'public/resources/css/theme-default/material-design-iconic-font.min.css',
    // 'public/resources/css/theme-default/libs/toastr/toastr.min.css',
], 'public/css/app.css');
//
// mix.scripts([
//     'public/resources/js/libs/jquery/jquery-1.11.2.min.js',
//     'public/resources/js/libs/jquery/jquery-migrate-1.2.1.min.js',
//     'public/resources/js/libs/bootstrap/bootstrap.min.js',
//     'public/resources/js/core/source/App.js',
//     'public/resources/js/core/source/AppNavigation.js',
//     'public/resources/js/core/source/AppCard.js',
//     'public/resources/js/core/source/AppForm.js',
//     'public/resources/js/core/source/AppVendor.js',
//     'public/resources/js/libs/bootbox/bootbox.min.js',
//     'public/resources/js/libs/toastr/toastr.min.js',
//     'public/resources/js/altair_admin_common.js'
// ], 'public/js/app.js');
