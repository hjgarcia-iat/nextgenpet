const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.sass(['app.scss']);
    mix.scripts([
        './public/js/jquery.js',
        './public/js/bootstrap.js',
        './public/js/jasny-bootstrap.min.js',
        './public/js/app.js'
    ],'public/js/all.js');

    mix.version('css/app.css');
    mix.version('js/all.js');

    mix.copy('public/fonts', 'public/build/fonts')
        .copy('public/img', 'public/build/img');

    mix.browserSync({
        proxy: "http://nextgenpet.dev"
    });
});