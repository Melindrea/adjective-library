<?php

namespace App\Storage\Description;
use \App\Model\Description as Model;

class EloquentDescriptionRepository implements DescriptionRepository
{
    public function find($id) {
        $description =  Model::find($id);


    }

    public function findAll() {
        return Model::all();
    }

    // [todo] - Implement the query
    public function query($params) {
        return Model::all();
    }

    public function update($id, $params) {
        $model = Model::find($id);

        foreach ($params as $key => $value) {
            $model->$key = $value;
        }

        $model->save();

        return $model;
    }

    public function delete($id) {
        $model = Model::destroy($id);
    }

    /**
     * Gender identity relationship
     */
    public function gender()
    {
        return $this->belongsTo('\App\Model\Gender');
    }

    /**
     * Age relationship
     */
    public function age()
    {
        return $this->belongsTo('\App\Model\Age');
    }

    /**
     * Territory of Origin relationship
     */
    public function origin()
    {
        return $this->belongsTo('\App\Model\Territory');
    }

    /**
     * Territory of Residence relationship
     */
    public function residence()
    {
        return $this->belongsTo('\App\Model\Territory');
    }
}
