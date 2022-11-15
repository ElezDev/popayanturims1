<?php

namespace Database\Seeders;
use App\Models\Calificacione;
use Illuminate\Database\Seeder;

class calificacionesSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $calificasione = new Calificacione();
    $calificasione->comentarios ="es muy bueno";
    $calificasione->reseñas ="Bueno";
    $calificasione->save();


    $calificasione1 = new Calificacione();
    $calificasione1->comentarios ="es muy bueno";
    $calificasione1->reseñas ="Bueno";
    $calificasione1->save();


    $calificasione2 = new Calificacione();
    $calificasione2->comentarios ="malo";
    $calificasione2->reseñas ="Bueno";
    $calificasione->save();

    $calificasione3 = new Calificacione();
    $calificasione3->comentarios ="no me gusto";
    $calificasione3->reseñas ="Bueno";
    $calificasione3->save();


    $calificasione4 = new Calificacione();
    $calificasione4->comentarios ="maloo";
    $calificasione4->reseñas ="Bueno";
    $calificasione4->save();
    }
}
