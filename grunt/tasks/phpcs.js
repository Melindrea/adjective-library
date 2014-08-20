module.exports = function(grunt) {
    'use strict';
    grunt.config('phpcs', {
        all: {
            dir: [
                '<%= config.app %>/**.php'
            ]
        },
        options: {
            bin: 'vendor/bin/phpcs',
            standard: 'PSR2'
        }
    });
};
