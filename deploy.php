<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'BPS');

// Project repository
set('repository', 'git@github.com:ricardovfreixo/laravel-ecommerce.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);

// Configuration

set('default_stage', 'dev');
set('http_user', 'vx');

// Hosts

host('production')
    ->hostname('hermes')
    ->set('deploy_path', '/server/bps/prod')
    ->set('branch', 'master')
    ->stage('prod');

host('development')
    ->hostname('hermes')
    ->set('deploy_path', '/server/bps/dev')
    ->set('branch', 'dev')
    ->stage('dev');
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
