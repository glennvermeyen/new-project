var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.sass("styles.scss", "assets/compiled");

    mix.styles([
        "bower_components/normalize.css/normalize.css",
        "assets/compiled/styles.css"
    ], 'public/css/styles.css', './');

    mix.scripts([
        "bower_components/html5shiv/dist/html5shiv.min.js",
        "bower_components/rem-unit-polyfill/js/rem.min.js",
        "bower_components/jquery/dist/jquery.min.js",
        "assets/js/nav.jquery.js",
        "assets/js/scripts.js"
    ], "public/js/scripts.js", "./");

    mix.version([
        "public/css/styles.css",
        "public/js/scripts.js"
    ]);



});
