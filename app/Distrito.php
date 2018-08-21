<?php

namespace Restauapp;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{

    public function users()
    {
        return $this
            ->hasMany('Restauapp\User');

    }


    public $timestamps = false;//
}
