<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Tiposervicio;
use Illuminate\Http\Request;

/**
 * Class TiposervicioController
 * @package App\Http\Controllers
 */
class TiposervicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposervicio = Http::get('http://popayanturimsapi.test/v1/tiposervicio');
        $TipoSerArray = $tiposervicio->json();
        return view('tiposervicio.index',compact('TipoSerArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('tiposervicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Http::post('http://popayanturimsapi.test/v1/tiposervicio',$request->all());
        return redirect()->route('tiposervicios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposervicio = Http::get('http://popayanturimsapi.test/v1/tiposervicio/'.$id);
        $TipoSerArray = $tiposervicio->json();
        return view('tiposervicio.show',compact('TipoSerArray'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposer = Http::get('http://popayanturimsapi.test/v1/tiposervicio/'.$id);
        $tipoS = $tiposer->json();
        return view('tiposervicio.edit', compact('tipoS'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tiposervicio $tiposervicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Http::put('http://popayanturimsapi.test/v1/tiposervicio/'.$id,$request->all());
        return redirect()->route('tiposervicios.index');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Http::delete('http://popayanturimsapi.test/v1/tiposervicio/' . $id);

        return redirect()->route('tiposervicios.index');
    }
}
