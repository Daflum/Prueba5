<?php

use Illuminate\Database\Seeder;
use Restauapp\Role;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $role = new Role();
        $role->Roles = 'Cliente';
        $role->save();

        $role = new Role();
        $role->Roles = 'Restaurant';
        $role->save();
    }
}
