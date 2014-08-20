<?php

namespace App\Model;

class Description extends \Illuminate\Database\Eloquent\Model
{
    protected $guarded = array('id');

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
