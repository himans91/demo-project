// -----------------------------------------------------------------------
// For a quick introduction on GruntJS.
// http://www.smashingmagazine.com/2013/10/29/get-up-running-grunt/
// -----------------------------------------------------------------------


module.exports = function(grunt) {

    // --------------------------------------------------------
    // Loading all NPM tasks (plugins) into Grunt. Without the
    // matchdep plugin this would have to be done manually.
    // --------------------------------------------------------
  
    require('load-grunt-tasks')(grunt);




    // --------------------------------------------------------
    // Project configuration.
    // --------------------------------------------------------
    grunt.initConfig({

        // --------------------------------------------------------
        // Variables.
        // --------------------------------------------------------
        pkg: grunt.file.readJSON('package.json'),
        sourceFolder: 'source/',
        staticFolder: '../../public/static/',
        nodeModulesFolder: 'node_modules/',


        // --------------------------------------------------------
        // SASS compilation.
        // https://github.com/gruntjs/grunt-contrib-sass
        // --------------------------------------------------------
        sass: {
            options: {
                require: "susy",
                compass: true
            },
            build: {
                files: {
                    '<%= staticFolder %>css/style.css': '<%= sourceFolder %>scss/import.scss'
                }
            }
        },


        // --------------------------------------------------------
        // CSS condense.
        // https://github.com/mediapart/grunt-cssc
        // --------------------------------------------------------
        cssc: {
            build: {
                options: {
                    consolidateViaDeclarations: true,
                    consolidateViaSelectors: true,
                    consolidateMediaQueries: true
                },
                files: {
                    '<%= staticFolder %>css/style.css': '<%= staticFolder %>css/style.css'
                }
            }
        },


        // --------------------------------------------------------
        // CSS minification.
        // https://github.com/gruntjs/grunt-contrib-cssmin
        // --------------------------------------------------------
        cssmin: {
            options: {
                banner: '/* <%= pkg.name %> - v<%= pkg.version %> - <%= grunt.template.today(\'yyyy-mm-dd HH:MM:ss\') %> */'
            },
            build: {
                files: {
                    '<%= staticFolder %>css/style.min.css': '<%= staticFolder %>css/style.css'
                }
            }
        },


        // --------------------------------------------------------
        // CSS auto prefix browser vendors.
        // https://github.com/nDmitry/grunt-autoprefixer
        // --------------------------------------------------------
        autoprefixer: {
            options: {
                map: true
            },
            multiple_files: {
                expand: true,
                flatten: true,
                src: '<%= staticFolder %>css/*.css',
                dest: '<%= staticFolder %>css'
            }
        },


        // --------------------------------------------------------
        // Validate JavaScript.
        // https://github.com/sindresorhus/grunt-eslint
        // --------------------------------------------------------
        eslint: {
            target: [
                '<%= sourceFolder %>js/**/*.js',
                '!<%= sourceFolder %>js/test/**/*.js',
                '!<%= sourceFolder %>js/**/*.spec.js'
            ],
            options: {
                config: 'eslint.json',
                quiet: false
            }
        },


        // --------------------------------------------------------
        // Include dependencies and minify requirejs modules.
        // https://github.com/asciidisco/grunt-requirejs
        // --------------------------------------------------------
        requirejs: {
            compile: {
                options: {
                    almond: true,
                    baseUrl: '<%= sourceFolder %>js/project',
                    name: 'main',
                    optimize: 'uglify',
                    out: '<%= staticFolder %>js/require.min.js',
                    mainConfigFile: '<%= sourceFolder %>js/project/config/require.js'
                }
            }
        },


        // --------------------------------------------------------
        // Grunt Blanket Mocha - Test coverage.
        // https://github.com/ModelN/grunt-blanket-mocha
        // https://github.com/alex-seville/blanket/tree/master/docs
        // --------------------------------------------------------
        blanket_mocha: {
            src: ['<%= sourceFolder %>js/test-runner/index.html'],
            options: {
                threshold: 65,
                globalThreshold: 65,
                log: true,
                logErrors: true,
                moduleThreshold: 65,
                reporter: 'Spec'
            }
        },


        // --------------------------------------------------------
        // Complexity - Calculate the cyclomatic complexity of
        // JavaScript code.
        // https://github.com/vigetlabs/grunt-complexity.
        // --------------------------------------------------------
        complexity: {
            generic: {
                src: [
                    '<%= sourceFolder %>js/**/*.js'
                ],
                exclude: [
                    '<%= sourceFolder %>js/test-runner/**/*.js',
                    '<%= sourceFolder %>js/config/**/*.js',
                    '<%= sourceFolder %>js/specs/**/*.js',
                    '<%= sourceFolder %>/js/boilerplate/**/*.js'
                ],
                options: {
                    breakOnErrors: true,
                    errorsOnly: false,
                    cyclomatic: [5],
                    halstead: [15],
                    maintainability: 100,
                    hideComplexFunctions: false,
                    broadcast: false
                }
            }
        },


        // --------------------------------------------------------
        // Watch tasks.
        // https://github.com/gruntjs/grunt-contrib-watch
        // --------------------------------------------------------
        watch: {
            sass: {
                files: ['**/*.{scss, sass}'],
                tasks: ['compile-css']
            },
            js: {
                files: ['<%= eslint.target %>'],
                tasks: ['analyse-js']
            }
        }
    });


    // --------------------------------------------------------
    // Minify all CSS and JavaScript.
    // --------------------------------------------------------
    grunt.registerTask('compile-all', ['analyse-js', 'compile-js', 'compile-requirejs', 'compile-css']);

    // --------------------------------------------------------
    // Complie CSS.
    // --------------------------------------------------------
    grunt.registerTask('compile-css', ['sass', 'autoprefixer', 'cssmin']);

    // --------------------------------------------------------
    // Minify RequireJS.
    // --------------------------------------------------------
    grunt.registerTask('compile-requirejs', ['requirejs']);

    // --------------------------------------------------------
    // Analyse JS.
    // --------------------------------------------------------
    grunt.registerTask('analyse-js', ['eslint', 'complexity', 'blanket_mocha']);

    // --------------------------------------------------------
    // The default Grunt task, this task is mandatory.
    // --------------------------------------------------------
    grunt.registerTask('default', ['compile-all']);

};