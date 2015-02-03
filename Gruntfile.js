
module.exports = function(grunt) {
 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


        dirs: {
            typescript: 'assets/typescript',
            js: 'assets/js/modules',
            vendor: 'assets/js/vendor',
            scss: 'assets/scss'
        },


        // Watches files for changes and runs tasks based on the changed files
        watch: {
            gruntfile: {
                files: ['Gruntfile.js'],
                tasks: ['build']
            },
            sass: {
                files: ['<%= dirs.scss %>/{,*/}*.{scss,sass}'],
                tasks: ['sass:dev', 'autoprefixer', 'concat'],
                options: {
                  livereload: true
                }
            },
            scripts: {
                files: [
                    'assets/js/{,*/}*.js',
                    '!<%= dirs.js %>/vendor/*.js'
                ],
                tasks: ['uglify:dist']
            },
            vendor: {
                files: [
                    '<%= dirs.vendor %>/{,*/}*.js',
                    '!<%= dirs.vendor %>/vendor.min.js'
                ],
                tasks: ['uglify:vendor']
            },
            copy: {
                files: ['readme.txt'],
                tasks: ['copy:dist']
            },
            typescript: {
                files: [
                    '<%= dirs.typescript %>/**/*.ts',
                    '!<%= dirs.js %>/**/*.ts'
                ],
                tasks: ['typescript:base']
            }
        },


        //Compile typescript files
        typescript: {
            base: {
                src: ['assets/typescript/*.ts'],
                dest: 'assets/js/app.js',
                options: {
                    module: 'amd'
                }
            }
        },



        jshint: {
            files: [
                'assets/js/app.js',
                'assets/dynamic/paths/**/*.js'
            ],
            options: {
                expr: true,
                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true
                }
            }
        },


        sass: {
            dev: {
                options: {
                    banner: '/*! <%= pkg.name %> <%= pkg.version %> styles.css <%= grunt.template.today("yyyy-mm-dd h:MM:ss TT") %> */\n',
                    style: 'minified'
                },
                files: {                         // Dictionary of files
                    'assets/css/app.css': 'assets/scss/app.scss'
                }
            }
        },


        // Add vendor prefixed styles
        autoprefixer: {
            options: {
                browsers: ['last 2 versions']
            },
            dist: {
                files: [{
                    expand: false,
                    src: 'assets/css/app.css',
                    dest: 'style.css'
                }]
            }
        },

        //// Minify css and save to main directory for wordpress
        //cssmin: {
        //    target: {
        //        files: [{
        //            'style.css': [ 'assets/css/*.css' ]
        //        }]
        //    }
        //},


        concat: {
            // Adds the wordpress theme information
            WordpressStyleInformation: {
                src: ['theme-information.txt', 'style.css'],
                dest: 'style.css'
            }
        },



        uglify: {
            vendor: {
                options: {
                    banner: '/*! <%= pkg.name %> <%= pkg.version %> vendor.min.js <%= grunt.template.today("yyyy-mm-dd h:MM:ss TT") %> */\n',
                    report: 'gzip'
                },
                files: {
                    'assets/js/vendor/vendor.min.js' : [
                        'assets/js/vendor/foundation.min.js' // add other vendor js files here
                    ]
                }
            },
            dist: {
                options: {
                    banner: '/*! <%= pkg.name %> <%= pkg.version %> app.min.js <%= grunt.template.today("yyyy-mm-dd h:MM:ss TT") %> */\n',
                    report: 'gzip'
                },
                files: {
                    'assets/js/app.min.js' : [
                        'assets/js/app.js' // add other app js files here
                    ]
                }
            },
            dev: {
                options: {
                    banner: '/*! <%= pkg.name %> <%= pkg.version %> app.js <%= grunt.template.today("yyyy-mm-dd h:MM:ss TT") %> */\n',
                    beautify: true,
                    compress: false,
                    mangle: false
                },
                files: {
                    'assets/js/app.js' : [
                        'assets/js/app.js'
                    ]
                }
            }
        }
    });
 
    require('load-grunt-tasks')(grunt);
 
    grunt.registerTask('build', [
        // 'jshint',
        'typescript',
        'uglify:vendor',
        'uglify:dist',
        'sass:dev',
        'autoprefixer',
        //'cssmin',
        'concat'
    ]);

    grunt.registerTask('test', [
        'uglify:dev'
        //use the nice javascript to debug
    ]);

    grunt.registerTask('serve', [
        'watch'
    ]);
};