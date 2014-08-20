<?php

namespace App;

class Conf
{
    protected $app;

    public function __construct(\Slim\Slim $app) {
        $this->app = $app;
    }

    public function init()
    {
        $this->app->container->singleton('conf', function ($environment = 'production') {
            $configPath = __DIR__.'/../config';

            $file = new \Illuminate\Filesystem\Filesystem;
            $loader = new \Illuminate\Config\FileLoader($file, $configPath);
            $config = new \Illuminate\Config\Repository($loader, $environment);

            return $config;
        });
    }
}
