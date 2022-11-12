<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * Class ServicioController
 * @package App\Http\Controllers
 */
class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ser= Http::get('http://popayanturimsapi.test/v1/servicio');
        $ServicioArray= $ser->json();
        return view('servicio.index', compact('ServicioArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposervicio = Http::get('http://popayanturimsapi.test/v1/tiposervicio');
        $TipoSerArray = $tiposervicio->json();
        $colletion=collect($TipoSerArray);
        $plucked = $colletion->pluck('nombre');

        return view('servicio.create',compact('plucked'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Http::post('http://popayanturimsapi.test/v1/servicio',$request->all());

        return redirect()->route('servicios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicio = Http::get('http://popayanturimsapi.test/v1/servicio/'.$id);
        $ServiArray = $servicio->json();
        return view('servicio.show', compact('ServiArray'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio= http::get('http://popayanturimsapi.test/v1/servicio/'.$id);
        $ServiArray=$servicio->json();
        $tiposervicio = Http::get('http://popayanturimsapi.test/v1/tiposervicio');
        $TipoSerArray = $tiposervicio->json();
        $colletion=collect($TipoSerArray);
        $plucked = $colletion->pluck('nombre');
        return view('servicio.edit', compact('ServiArray','plucked'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Servicio $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        Http::put('http://popayanturimsapi.test/v1/servicio/'.$id,$request->all());
        return redirect()->route('servicios.index');

    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Http::delete('http://popayanturimsapi.test/v1/servicio/' . $id);

        return redirect()->route('servicios.index');
    }
}
