<?php

namespace Database\Seeders;
use App\Models\Mapa;
use Illuminate\Database\Seeder;

class MapasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapa = new Mapa();
        $mapa->nombre = "prueba";
        $mapa->longitud= "prueba";
        $mapa->latitud= "prueba";
        $mapa->save();
    }

}
