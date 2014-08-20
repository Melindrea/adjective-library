module.exports = function(grunt) {
    'use strict';

    grunt.config('phpunit', {
        classes: {
            dir: '<%= config.app %>/tests'
        },
        options: {
            bin: 'vendor/bin/phpunit',
            bootstrap: 'app/tests/bootstrap.php',
            staticBackup: false,
            colors: true,
            noGlobalsBackup: false
        }
    });
};
