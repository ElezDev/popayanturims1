<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\Evento;
use Illuminate\Http\Request;

/**
 * Class EventoController
 * @package App\Http\Controllers
 */
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evento = Http::get('http://popayanturimsapi.test/v1/Evento');
        $eventoArray = $evento->json();
        return view('evento.index', compact('eventoArray'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $evento = Http::get('http://popayanturimsapi.test/v1/Evento');
        $eventoArray = $evento->json();
        $colletion=collect($eventoArray);
        $plucked = $colletion->pluck('nombre');
        return view('evento.create',compact('plucked'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evento = Http::post('http://popayanturimsapi.test/v1/Evento',$request->all());
        return $evento;

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento= Http::get('http://popayanturimsapi.test/v1/Evento/'.$id);
        $EvenArray = $evento->json();
        return view('evento.show', compact('EvenArray'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evento= http::get('http://popayanturimsapi.test/v1/Evento/'.$id);
        $EventArray=$evento->json();
        return view('evento.edit', compact('EventArray'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Evento $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        Http::post('http://popayanturimsapi.test/v1/Evento/'.$id,$request->all());
        return redirect()->route('eventos.index');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Http::delete('http://popayanturimsapi.test/v1/Evento/' . $id);

        return redirect()->route('eventos.index')->with('success', 'Evento deleted successfully');
    }
}
