<?php

namespace Restauapp;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    public function users()
    {
        return $this
            ->belongsToMany('Restauapp\User')
            ->withTimestamps();
    }
    //
}
