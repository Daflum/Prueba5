<?php

use Illuminate\Database\Seeder;
use Restauapp\Plato;

class PlatoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $plato = new Plato();
        $plato-> Nombre = 'Pollo a la brasa';
        $plato-> save();

        $plato = new Plato();
        $plato-> Nombre = 'Arroz chaufa';
        $plato-> save();

        $plato = new Plato();
        $plato-> Nombre = 'Lomo saltado';
        $plato-> save();

        $plato = new Plato();
        $plato-> Nombre = 'Arroz con pollo';
        $plato-> save();
        //
    }
}
