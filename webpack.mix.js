const mix = require('laravel-mix');
const path = require('path');
require('laravel-mix-bundle-analyzer');

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

mix.webpackConfig({
        devtool: 'source-map',
        resolve: {
            alias: {
                'sass': path.resolve(__dirname, 'resources/sass'),
            }
        }
    })
    .sourceMaps()
    .js('resources/js/app.js', 'public/js')
    .vue({
      extractStyles: 'public/css/vue.css',
      // need mix 6 and webpack 5 :(
      globalStyles: {
        scss: [
          'resources/sass/_variables.scss',
          'node_modules/bootstrap/scss/_functions.scss',
          'node_modules/bootstrap/scss/_variables.scss',
          'node_modules/bootstrap/scss/_mixins.scss',
        ],
      }
    })
    .extract()
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
    })
    .version();

if (! mix.inProduction()) {
    mix.bundleAnalyzer({
        analyzerMode: 'static',
        openAnalyzer: false,
    });
}
