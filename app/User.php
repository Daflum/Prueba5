<?php

namespace Restauapp;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{public $timestamps = false;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','Apellidos', 'email', 'password','Distrito_id','Restaurant_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','Restaurant_id'
    ];


    public function pedidos(){
        return $this
            ->hasMany('Restauapp\Pedido');
    }


    public function distritos()
    {
        return $this
            ->belongsTo('Restauapp\Distrito');
    }
    public function restaurants()
    {
        return $this
            ->belongsTo('Restauapp\Restaurant');
    }

    public function roles()
    {
        return $this
            ->belongsToMany('Restauapp\Role')
            ->withTimestamps();
    }

    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta acción no está autorizada.');
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('Roles', $role)->first()) {
            return true;
        }
        return false;
    }
}
