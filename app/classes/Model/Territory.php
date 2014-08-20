<?php

namespace App\Model;

class Territory extends \Illuminate\Database\Eloquent\Model
{
    protected $guarded = array('id');

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'territories';

    /**
     * Description relationship
     */
    public function descriptions()
    {
        return $this->hasMany('\App\Model\Description');
    }
}
