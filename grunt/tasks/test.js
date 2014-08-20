module.exports = function(grunt) {
    'use strict';

    grunt.registerTask('test', function(target) {
        if (target === 'php') {
            return grunt.task.run([
                'phpunit'
            ]);
        }
        grunt.task.run([
            'test:php'
        ]);
    });
};
