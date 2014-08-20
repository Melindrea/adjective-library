'use strict';
// # Globbing
// for performance reasons we're only matching one level down:
// 'test/spec/{,*/}*.js'
// use this if you want to recursively match all subfolders:
// 'test/spec/**/*.js'

module.exports = function (grunt) {
    // show elapsed time at the end
    require('time-grunt')(grunt);
    // load all grunt tasks
    require('jit-grunt')(grunt);

    grunt.initConfig({
        config: {
            path: 'http://api.adjective-library.com',

            app: 'app',
            tests: 'app/tests',
            public: 'public',
            tmp: '.tmp',

            files: {
                scripts: [
                    'Gruntfile.js',
                    'grunt/tasks/*.js'
                ]
            }
        }
    });

    grunt.loadTasks('grunt/tasks');

    grunt.registerTask('commit', [
        'lint',
        'test'
    ]);

    grunt.registerTask('default', [
        'commit'
    ]);
};
