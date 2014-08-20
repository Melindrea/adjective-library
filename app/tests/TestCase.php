<?php

namespace Test;
class TestCase extends \PHPUnit_Framework_TestCase
{
    protected $app;

    public function setUp()
    {
        parent::setUp();

        $app = new \Slim\Slim(array(
            'debug' => false,
            'mode' => 'testing'
        ));

        $ioc = new \App\Ioc($app);
        $ioc->init();

        $conf = new \App\Conf($app);
        $conf->init('testing');

        $this->app = $app;
    }

    protected function request($method, $path, $options = array())
    {
        // Capture STDOUT
        ob_start();

        // Prepare a mock environment
        \Slim\Environment::mock(array_merge(array(
            'REQUEST_METHOD' => $method,
            'PATH_INFO' => $path,
            'SERVER_NAME' => 'slim-test.dev',
        ), $options));

        $app = new \Slim\Slim();
        $this->app = $app;
        $this->request = $app->request();
        $this->response = $app->response();

        // Return STDOUT
        return ob_get_clean();
    }

    protected function get($path, $options = array())
    {
        $this->request('GET', $path, $options);
    }

    protected function post($path, $options = array())
    {
        $this->request('POST', $path, $options);
    }

    protected function put($path, $options = array())
    {
        $this->request('PUT', $path, $options);
    }

    protected function delete($path, $options = array())
    {
        $this->request('DELETE', $path, $options);
    }

}
