<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Calificasione;
use Illuminate\Http\Request;

/**
 * Class CalificasioneController
 * @package App\Http\Controllers
 */
class CalificasioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calificasione = Http::get('http://popayanturimsapi.test/v1/calificasiones');
        $CalificasionesArray = $calificasione->json();

        return view('calificasione.index', compact('CalificasionesArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calificasione.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Http::post('http://popayanturimsapi.test/v1/calificasiones',$request->all());
        return redirect()->route('calificasiones.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $califi = Http::get('http://popayanturimsapi.test/v1/calificasiones/'.$id);
        $CalifiArray = $califi->json();
        return view('calificasione.show', compact('CalifiArray'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calificasione = Http::get('http://popayanturimsapi.test/v1/calificasiones/'.$id);
        $CalifiArray=$calificasione->json();  
        
        return view('calificasione.edit', compact('CalifiArray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Calificasione $calificasione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Http::put('http://popayanturimsapi.test/v1/calificasiones/'.$id,$request->all());
        return redirect()->route('calificasiones.index');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Http::delete('http://popayanturimsapi.test/v1/calificasiones/' . $id);

        return redirect()->route('calificasiones.index');
    }
}
