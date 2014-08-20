<?php
namespace App;

class Ioc
{
    protected $app;

    public function __construct(\Slim\Slim $app) {
        $this->app = $app;
    }

    public function init()
    {
        $this->app->container->singleton('ioc', function () {
            return new \Illuminate\Container\Container;
        });

        $this->makeBindings();
    }

    public function makeBindings()
    {
        $this->app->ioc->bind('\App\Controller\Description', function()
        {
            return new \App\Controller\Description($this->app);
        });
    }
}
