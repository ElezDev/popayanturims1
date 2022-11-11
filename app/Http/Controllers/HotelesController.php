<?php

namespace App\Http\Controllers;
use App\Models\Lugar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HotelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $lugars = Http::get('http://popayanturimsapi.test/v1/lugar');
        $lugarArray = $lugars->json();
        return view('hoteles',compact('lugarArray'));

        $buscar = $request->buscar;
        $hotel = Lugar::where('id','LIKE', '%'.$buscar.'%')
        ->orWhere('nombre','LIKE', '%'.$buscar.'%')
        ->latest('id')
        ->paginate(5);

        $lugar = lugar::all();
        return view('hoteles',compact('lugar'));
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
