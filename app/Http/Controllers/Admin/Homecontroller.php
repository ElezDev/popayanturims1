<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Lugar;
use Illuminate\Support\Facades\Http;
use App\models\post;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        // !Contadores para mostrar en el bash
        // !se trae el endpoitn y se cuenta en una coleccion
        $lugar = Http::get('http://popayanturimsapi.test/v1/lugar');
        $lugares = $lugar->json();
        // $collection = collect($lugares);
        $TotalLugares = count($lugares);

        $user = Http::get('http://popayanturimsapi.test/v1/user');
        $Usuarios = $user->json();
        // $colleUser = collect($Usuarios);
        $TotalUser = count($Usuarios);

        $Post = Http::get('http://popayanturimsapi.test/v1/post');
        $Posts = $Post->json();
        // $collePost = collect($Posts);
        $TotalPost = count($Posts);


 return view('Admin.index', compact('TotalUser','TotalLugares','TotalPost'));


    }
}
