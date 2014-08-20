<?php

namespace App\Model;

class Age extends \Illuminate\Database\Eloquent\Model
{
    protected $guarded = array('id');

    /**
     * Description relationship
     */
    public function descriptions()
    {
        return $this->hasMany('\App\Model\Description');
    }
}
