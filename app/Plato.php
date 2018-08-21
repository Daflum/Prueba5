<?php

namespace Restauapp;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    public function restaurants()
    {
        return $this
            ->belongsToMany('Restauapp\Restaurant', 'Productos')->withPivot('precio');

    }

    public $timestamps = false; //
}
