<?php

namespace Restauapp;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    public function pedidos()
    {
        return $this
            ->belongsToMany('Restauapp\Pedido')->withPivot('cantidad');

    }
    public $timestamps = false;//
}
