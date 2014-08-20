<?php
require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
    'debug' => false
));

// $ioc = new \App\Ioc($app);
// $ioc->init();

// $conf = new \App\Conf($app);
// $conf->init();

// include 'routes/linkReport.php';

$app->run();
