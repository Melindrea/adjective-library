module.exports = function(grunt) {
    'use strict';

    grunt.registerTask('lint', function(target) {
        if (target === 'scripts') {
            return grunt.task.run([
                'jsvalidate',
                'jshint'
            ]);
        } else if (target === 'json') {
            return grunt.task.run([
                'jsonlint'
            ]);
        } else if (target === 'php') {
            return grunt.task.run([
                'phplint',
                'phpcs'
            ]);
        }

        grunt.task.run([
            'lint:scripts',
            'lint:json',
            'lint:php'
        ]);
    });
};
