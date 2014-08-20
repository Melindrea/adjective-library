<?php

$container = new Illuminate\Container\Container;
$connectionFactory = new \Illuminate\Database\Connectors\ConnectionFactory($container);
$connection = $connectionFactory->make(array(
    'driver' => 'sqlite',
    'database' => __DIR__ . '/application.sqlite',
));
$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $connection);
$resolver->setDefaultConnection('default');
\Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);
