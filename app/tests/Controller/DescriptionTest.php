<?php

namespace Test\Controller;
use \App\Controller\Description as Description;

class DescriptionTest extends \Test\TestCase
{
    protected $object;

    public function setUp()
    {
        parent::setUp();

        $this->object = $this->app->ioc->make('\App\Controller\Description');
    }

    public function testFind()
    {

    }
}
