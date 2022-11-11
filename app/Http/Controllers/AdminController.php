<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
// !Contadores para mostrar en el bash
        // !se trae el endpoitn y se cuenta en una coleccion
        $lugar = Http::get('http://popayanturimsapi.test/v1/lugar/');
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
