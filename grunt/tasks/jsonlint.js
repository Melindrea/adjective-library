module.exports = function(grunt) {
    'use strict';

    grunt.config('jsonlint', {
        files: [
            '*.json',
            'grunt/hooks/data/*.json'
        ]
    });
};
