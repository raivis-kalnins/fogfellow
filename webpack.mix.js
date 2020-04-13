let mix = require('laravel-mix');

/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
*/

mix.webpackConfig({
	module: {
		rules: [
			{
				test: /\.jsx?$/,
				exclude: [ /node_modules/, /\.ejs$/ ],
				use: {
					loader: 'babel-loader',
					options: {
						presets: ['@babel/preset-react' , '@babel/preset-env'] // default = env
					}
				}
			}
		]
	}
});

mix.react('resources/src/jsx/gutenberg.jsx', 'resources/dist/js/gutenberg.js').minify('resources/dist/js/gutenberg.js')
.copyDirectory('node_modules/bulma/sass', 'resources/src/scss/vendor/bulma')
.copyDirectory('node_modules/swiper/', 'resources/dist/vendor/swiper')
.copyDirectory('node_modules/rellax/', 'resources/dist/vendor/rellax')
.sass('resources/src/scss/gutenberg.scss', 'resources/dist/css').options({ processCssUrls: false }).minify('resources/dist/css/gutenberg.css')
.sass('resources/src/scss/gutenberg-editor.scss', 'resources/dist/css').options({ processCssUrls: false }).minify('resources/dist/css/gutenberg-editor.css')
.sass('resources/src/scss/style.scss', 'resources/dist/css').options({ processCssUrls: false }).minify('resources/dist/css/style.css')
.js('resources/src/js/main.js', 'resources/dist/js/scripts.js').minify('resources/dist/js/scripts.js')
.browserSync('http://fog.local/');
