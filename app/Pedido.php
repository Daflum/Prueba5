<?php

namespace Restauapp;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

    public function users()
    {
        return $this
            ->belongsTo('Restauapp\User');
    }

    public function restaurants()
    {
        return $this
            ->belongsTo('Restauapp\Restaurant');
    }

    public function productos()
    {
        return $this
            ->belongsToMany('Restauapp\Producto')->withPivot('cantidad');

    }

    //
}
