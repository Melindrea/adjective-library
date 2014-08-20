module.exports = function(grunt) {
    'use strict';

    grunt.config('jshint', {
        options: {
            jshintrc: '.jshintrc',
            report: require('jshint-stylish')
        },
        all: '<%= config.files.scripts %>'
    });
};
