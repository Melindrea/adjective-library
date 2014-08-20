module.exports = function(grunt) {
    'use strict';

    grunt.config('phpunit', {
        classes: {
            dir: '<%= config.tests %>'
        },
        options: {
            bin: 'vendor/bin/phpunit',
            bootstrap: '<%= config.tests %>/bootstrap.php',
            staticBackup: false,
            colors: true,
            noGlobalsBackup: false
        }
    });
};
