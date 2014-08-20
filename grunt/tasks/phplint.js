module.exports = function(grunt) {
    'use strict';

    grunt.config('phplint', {
        // Add specific modules here
        options: {
            swapPath: '/tmp'
        },
        all: [
            '<%= config.app %>/**/*.php'
        ]
    });
};
