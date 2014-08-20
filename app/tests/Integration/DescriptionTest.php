<?php

namespace Test\Integration;

class DescriptionTest extends \Test\TestCase
{
    public function testFind()
    {
        $this->get('/descriptions/1');
        $this->assertEquals('200', $this->response->status());
    }

    public function testFindAll()
    {
        $this->get('/descriptions');
        $this->assertEquals('200', $this->response->status());
    }

    public function testUpdate()
    {
        $this->put('/descriptions/1');
        $this->assertEquals('200', $this->response->status());
    }

    public function testCreate()
    {
        $this->post('/descriptions');
        $this->assertEquals('200', $this->response->status());
    }

    public function testDelete()
    {
        $this->delete('/descriptions/1');
        $this->assertEquals('200', $this->response->status());
    }
}
