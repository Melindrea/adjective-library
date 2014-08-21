<?php

namespace App\Controller;
use \App\Storage\Description\DescriptionRepository as DescriptionRepository;

class Description
{
    protected $app;

    public function __construct(\Slim\Slim $app, DescriptionRepository $description)
    {
        $this->app = $app;
        $this->description = $description;
    }

    public function find($id)
    {
        return $this->description->find($id);
    }

    public function findAll()
    {
        return $this->description->all();
    }

    public function update($id, $params)
    {
        $description = $this->description->find($id);

        foreach ($params as $key => $value) {
            $description->$key = $value;
        }

        $description->save();

        return $description;
    }

    public function delete($id)
    {
        $description = $this->description->destroy($id);

        return new \StdClass();
    }
}
