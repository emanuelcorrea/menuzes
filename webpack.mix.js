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

mix.browserSync({
    proxy: 'http://127.0.0.1:8000',
    host: '192.168.0.143',
    port: '80',
    ui: false,
    notify: false,
    injectChanges: true,
    minify: false,
    timestamps: false
});
 
mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css').options({
        postCss: [
            require('postcss-import'),
            require('autoprefixer'),
            require('tailwindcss')
        ]
    })
    .js("resources/js/routes", "public/js");
