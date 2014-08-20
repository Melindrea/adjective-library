<?php
require __DIR__ . '/../../vendor/autoload.php';

class Slim_Framework_TestCase extends \PHPUnit_Framework_TestCase
{
    protected $app;

    public function setUp()
    {
        parent::setUp();

        $app = new \Slim\Slim(array(
            'debug' => false,
            'mode' => 'testing'
        ));

        // $ioc = new \App\Ioc($app);
        // $ioc->init();

        // $conf = new \App\Conf($app);
        // $conf->init();

        $this->app = $app;
    }
}
