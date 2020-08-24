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
    .sass('resources/sass/app.scss', 'public/css');


mix.styles([
    'public/assets/css/styles.css',
], 'public/css/justrepair.css');
mix.scripts([
    'public/assets/js/just.js',
], 'public/js/justrepair.js');



// mix.styles([
//     'node_modules/admin-lte/dist/css/adminlte.min.css',
//     'node_modules/admin-lte/dist/css/adminlte.min.css',
//     'node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css',
//     'node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'
// ], 'public/css/admin.css');

// mix.scripts([
//     'node_modules/admin-lte/plugins/jquery/jquery.min.js',
//     'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js',
//     'node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
//     'node_modules/admin-lte/dist/js/adminlte.js',
//     'node_modules/admin-lte/dist/js/demo.js',
//     'node_modules/admin-lte/plugins/jquery-mousewheel/jquery.mousewheel.js',
//     'node_modules/admin-lte/plugins/raphael/raphael.min.js',
//     'node_modules/admin-lte/plugins/jquery-mapael/jquery.mapael.min.js',
//     'node_modules/admin-lte/plugins/jquery-mapael/maps/usa_states.min.js',
//     'node_modules/admin-lte/plugins/chart.js/Chart.min.js',
//     'node_modules/admin-lte/dist/js/pages/dashboard2.js',
// ], 'public/js/admin.js');