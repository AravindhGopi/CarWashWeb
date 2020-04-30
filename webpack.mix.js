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
mix.js([
    'resources/js/app.js',
    'public/global_assets/js/main/bootstrap.bundle.min.js',
    'public/global_assets/js/plugins/loaders/blockui.min.js',
    'public/global_assets/js/plugins/forms/styling/switchery.min.js',
    'public/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js',
    // 'public/global_assets/js/plugins/ui/moment/moment.min.js',
    'public/assets/js/app.js',
    ], 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'public/css/app.css',
        'public/assets/css/bootstrap.min.css',
        'public/global_assets/css/icons/icomoon/styles.css',
        'public/assets/css/bootstrap_limitless.min.css',
        'public/assets/css/components.min.css',
        'public/assets/css/colors.min.css',
        'public/assets/css/layout.min.css'
    ],'public/css/app.css');
