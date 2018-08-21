<?php

namespace Restauapp;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{ protected $fillable = [
    'Nombre','hora_apertura', 'hora_cierre'
];

    public function platos()
    {
        return $this
            ->belongsToMany('Restauapp\Plato', 'Productos')->withPivot('precio');

    }

    public function pedidos()
    {
        return $this
            ->hasMany('Restauapp\Pedido');
    }

    public function usuarios()
    {
        return $this
            ->hasOne('Restauapp\User');
    }

    public $timestamps = false;  //
}
