module.exports = function(grunt) {
    // Grunt dependencies
    require('time-grunt')(grunt);
    var mozjpeg = require('imagemin-mozjpeg');
    var pngquant = require('imagemin-pngquant');
    var gifsicle = require('imagemin-gifsicle');
    var imageminSvgo = require('imagemin-svgo');

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
                    use: [pngquant(), mozjpeg(), gifsicle(), imageminSvgo()]
                }, // Another target
                'files': [{
                    'expand': true,
                    'cwd': 'src/assets/images/',
                    src: ['**/*.{png,jpg,jpeg,gif,svg}'],
                    'dest': 'dist/assets/images/'
                }]
            }
        },
        'sass': {
            'dev': {
                options: {
                    outputStyle: 'expanded'
                },
                files: {
                    'src/assets/stylesheets/foundation.css': 'src/assets/scss/foundation.scss',
                }
            },
            'dist': {
                options: {
                    outputStyle: 'compressed'
                },
                files: {
                    'src/assets/stylesheets/foundation.min.css': 'src/assets/scss/foundation.scss',
                }
            },
        },
        'string-replace': {

            'dist': {
                files: {
                    'dist/parts/header.php': 'dist/parts/header.php',
                    'dist/parts/footer.php': 'dist/parts/footer.php',
                },

                options: {
                    replacements: [{
                        pattern: 'foundation.css',
                        replacement: 'foundation.min.css'
                    },
                    {
                        pattern: 'foundation.js',
                        replacement: 'foundation.min.js'
                    },
                    {
                        pattern: 'assets/javascript/vendor/jquery.js',
                        replacement: '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'
                    }]
                }

            }

        },

        'copy': {
            'build': {
                'files': [{
                    'expand': true,
                    'cwd': 'src/assets/components/foundation/js/vendor/',
                    'src': '**',
                    'flatten': true,
                    'dest': 'src/assets/javascript/vendor/'
                }, {
                    'src': 'src/assets/components/jquery.scrollTo/jquery.scrollTo.min.js',
                    'dest': 'src/assets/javascript/vendor/jquery.scrollTo.min.js'
                }, {
                    'expand': true,
                    'cwd': 'src/assets/components/fontawesome/fonts',
                    'src': ['**'],
                    'dest': 'src/assets/fonts/'
                }]
            },
            'dist': {
                'files': [{
                        'expand': true,
                        'cwd': 'src/',
                        'src': '*.php',
                        'dest': 'dist/'
                    }, {
                        'expand': true,
                        'cwd': 'src/',
                        'src': 'parts/**',
                        'dest': 'dist/'
                    }, {
                        'expand': true,
                        'cwd': 'src/',
                        'src': 'templates/**',
                        'dest': 'dist/'
                    }, {
                        'expand': true,
                        'cwd': 'src/',
                        'src': 'assets/fonts/**',
                        'dest': 'dist/'
                    }, {
                        'expand': true,
                        'cwd': 'src/',
                        'src': 'assets/javascript/**',
                        'dest': 'dist/'
                    }, {
                        'expand': true,
                        'cwd': 'src/',
                        'src': 'assets/stylesheets/**',
                        'dest': 'dist/'
                    }, {
                        'expand': true,
                        'cwd': 'src/files/',
                        'src': '*',
                        'dest': 'dist/'
                    }, {
                        'src': 'src/files/.htaccess-dev',
                        'dest': 'dist/.htaccess'
                    }

                ]
            }
        },
        'concat': {
            'options': {
                'separator': ';',
                'sourceMap': true
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
                    'src/assets/components/jquery.scrollTo/jquery.scrollTo.min.js',
                    'src/assets/javascript/custom/*.js'
                ],
                // Finally, concatinate all the files above into one single file
                'dest': 'src/assets/javascript/foundation.js'
            }
        },
        'uglify': {
            'dist': {
                'files': {
                    'src/assets/javascript/foundation.min.js': ['src/assets/javascript/foundation.js']
                },
            },
            'dev': {
                options: {
                    beautify: true,
                    mangle: false,
                    compress: false,
                    preserveComments: 'all'
                },
                src: 'src/assets/javascript/foundation.js',
                dest: 'src/assets/javascript/foundation.js'
            },
        },
        'watch': {
            'grunt': {
                'files': ['Gruntfile.js']
            },
            'sass': {
                'files': 'src/assets/scss/**/*.scss',
                'tasks': ['sass:dev'],
                'options': {
                    'livereload': true
                }
            },
            'js': {
                'files': 'src/assets/javascript/custom/**/*.js',
                'tasks': ['concat', 'uglify:dev'],
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
    grunt.loadNpmTasks('grunt-string-replace');

    /* Define tasks */
    grunt.registerTask('deploy', ['sass:dist', 'concat', 'uglify:dist', 'copy:dist', 'newer:imagemin:dynamic', 'string-replace:dist']);
    grunt.registerTask('build', ['copy:build', 'sass:dev', 'concat', 'uglify:dev']);
    grunt.registerTask('default', ['watch']);
};
