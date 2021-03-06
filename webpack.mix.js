const { mix } = require('laravel-mix');
const Path = require('path');

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

mix
  .webpackConfig({
    output: { chunkFilename: 'chunks/[name].bundle.js', publicPath: '/' },
    resolve: {
      modules: [
        'node_modules',
        'bower_components',
      ],
      enforceExtension: false,
      alias: {
        "TweenLite": Path.resolve('node_modules', 'gsap/src/uncompressed/TweenLite.js'),
        "TweenMax": Path.resolve('node_modules', 'gsap/src/uncompressed/TweenMax.js'),
        "TimelineLite": Path.resolve('node_modules', 'gsap/src/uncompressed/TimelineLite.js'),
        "TimelineMax": Path.resolve('node_modules', 'gsap/src/uncompressed/TimelineMax.js'),
        "ScrollMagic": Path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/ScrollMagic.js'),
        "animation.gsap": Path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js'),
        "debug.addIndicators": Path.resolve('node_modules', 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js')
      }
    },
  })
  .js('resources/assets/js/app.js', 'public/js')
  .sass('resources/assets/sass/app.scss', 'public/css')
  .copy('resources/assets/images', 'public/images')
  .browserSync('lv-fabricate.dev');
