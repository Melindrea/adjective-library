<?php

namespace App\Controller;
use \App\Model\Description as DescriptionModel;

class Description
{
    protected $app;

    public function __construct(\Slim\Slim $app)
    {
        $this->app = $app;
    }

    public function find($id)
    {
        return DescriptionModel::find($id);
        // Repository istället för model
    }

    public function findAll()
    {
        return DescriptionModel::all();
    }

    public function update($id, $params)
    {
        $description = DescriptionModel::find($id);

        foreach ($params as $key => $value) {
            $description->$key = $value;
        }

        $description->save();

        return $description;
    }

    public function delete($id)
    {
        $description = DescriptionModel::destroy($id);

        return new \StdClass();
    }
}
