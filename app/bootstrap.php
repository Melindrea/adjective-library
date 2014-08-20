<?php

require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
    'debug' => false
));

$ioc = new \App\Ioc($app);
$ioc->init();

$conf = new \App\Conf($app);
$conf->init();

// Include database
include 'database.php';

// Include routes
include 'routes.php';

$app->run();
