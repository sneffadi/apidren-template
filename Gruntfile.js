module.exports = function(grunt) {
	// Grunt dependencies
	require('time-grunt')(grunt);
	var mozjpeg = require('imagemin-mozjpeg');
	var pngquant = require('imagemin-pngquant');
	var gifsicle = require('imagemin-gifsicle');
	/* Configure Grunt */
	grunt.initConfig({
		'pkg': grunt.file.readJSON('package.json'),
		'imagemin': {
			'dynamic': {
				'options': {
					'optimizationLevel': 3,
					'verbose': true,
					'svgoPlugins': [{
						'removeViewBox': false
					}],
         			 use: [pngquant(), mozjpeg(), gifsicle()]
				}, // Another target
				'files': [{
					'expand': true,
					'cwd': 'src/assets/images/',
          src: ['**/*.{png,jpg,jpeg,gif}'],
					'dest': 'dist/assets/images/'
				}]
			}
		},
		'sass': {
			'options': {
				// If you can't get source maps to work, run the following command in your terminal:
				// $ sass scss/foundation.scss:css/foundation.css --sourcemap
				// (see this link for details: http://thesassway.com/intermediate/using-source-maps-with-sass )
				'sourceMap': true
			},
			'dist': {
				'options': {
					'outputStyle': 'compressed'
				},
				'files': {
					'src/assets/stylesheets/foundation.css': 'src/assets/scss/foundation.scss'
				}
			}
		},
		'postcss': {
			options: {
				map: false,
				processors: [
					require('autoprefixer')({browsers: ['last 5 version']})
				]
			},
			dist: {
				src: 'dist/assets/stylesheets/foundation.css'
			}
		},
		'copy': {
			'build': {
				'files': [
					{
						'expand': true,
						'cwd': 'src/assets/components/foundation/js/vendor/',
						'src': '**',
						'flatten': true,
						'dest': 'src/assets/javascript/vendor/'
					},
					{
						'expand': true,
						'cwd': 'src/assets/components/fontawesome/fonts',
						'src': ['**'],
						'dest': 'src/assets/fonts/'
					}
				]
			},
			'deploy': {
				'files': [
					{'expand':true, 'cwd':'src/', 'src':'*.php', 'dest':'dist/'},
					{'expand':true, 'cwd':'src/', 'src':'parts/**', 'dest':'dist/'},
					{'expand':true, 'cwd':'src/', 'src':'templates/**', 'dest':'dist/'},
					{'expand':true, 'cwd':'src/', 'src':'assets/fonts/**', 'dest':'dist/'},
					{'expand':true, 'cwd':'src/', 'src':'assets/javascript/**', 'dest':'dist/'},
					{'expand':true, 'cwd':'src/', 'src':'assets/stylesheets/**', 'dest':'dist/'}
				]
			}
		},
		'concat': {
			'options': {
				'separator': ';'
			},
			'dist': {
				'src': [
					// Include vendor scripts
					'src/assets/components/foundation/js/vendor/placeholder.js',
					'src/assets/components/foundation/js/vendor/jquery.cookie.js',
					// Foundation core
					'src/assets/components/foundation/js/foundation/foundation.js',
					// Pick the componenets you need in your project
					'src/assets/components/foundation/js/foundation/foundation.abide.js',
					'src/assets/components/foundation/js/foundation/foundation.accordion.js',
					'src/assets/components/foundation/js/foundation/foundation.alert.js',
					'src/assets/components/foundation/js/foundation/foundation.clearing.js',
					'src/assets/components/foundation/js/foundation/foundation.dropdown.js',
					'src/assets/components/foundation/js/foundation/foundation.equalizer.js',
					'src/assets/components/foundation/js/foundation/foundation.interchange.js',
					'src/assets/components/foundation/js/foundation/foundation.joyride.js',
					'src/assets/components/foundation/js/foundation/foundation.magellan.js',
					'src/assets/components/foundation/js/foundation/foundation.offcanvas.js',
					'src/assets/components/foundation/js/foundation/foundation.orbit.js',
					'src/assets/components/foundation/js/foundation/foundation.reveal.js',
					'src/assets/components/foundation/js/foundation/foundation.slider.js',
					'src/assets/components/foundation/js/foundation/foundation.tab.js',
					'src/assets/components/foundation/js/foundation/foundation.tooltip.js',
					'src/assets/components/foundation/js/foundation/foundation.topbar.js',
					// Include your own custom scripts (located in the custom folder)
					'src/assets/javascript/custom/*.js'
				],
				// Finally, concatinate all the files above into one single file
				'dest': 'src/assets/javascript/foundation.js'
			}
		},
		'uglify': {
			'dist': {
				'files': {
					// Shrink the file size by removing spaces
					'src/assets/javascript/foundation.js': ['src/assets/javascript/foundation.js']
				}
			}
		},
		'watch': {
			'grunt': {
				'files': ['Gruntfile.js']
			},
			'sass': {
				'files': 'src/assets/scss/**/*.scss',
				'tasks': ['sass'],
				'options': {
					'livereload': true
				}
			},
			'js': {
				'files': 'src/assets/javascript/custom/**/*.js',
				'tasks': ['concat', 'uglify'],
				'options': {
					'livereload': true
				}
			},
			'all': {
				'files': 'src/**/*.php',
				'options': {
					'livereload': true
				}
			}
		},
		clean: ["dist/"],
	});

	/* Load all npm modules */
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-newer');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-postcss');

	/* Define tasks */
	grunt.registerTask('deploy', ['copy:deploy', 'newer:imagemin:dynamic','postcss']);
	grunt.registerTask('build', ['copy:build', 'sass', 'concat', 'uglify']);
	grunt.registerTask('default', ['watch']);
};
