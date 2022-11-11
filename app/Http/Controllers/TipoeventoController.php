<?php

namespace App\Http\Controllers;

use App\Models\Tipoevento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * Class TipoeventoController
 * @package App\Http\Controllers
 */
class TipoeventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoevento = Http::get('http://popayanturimsapi.test/v1/tipoevento');
        $tipoeventoArray= $tipoevento ->json();
        return view('tipoevento.index', compact('tipoeventoArray'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoevento = new Tipoevento();
        return view('tipoevento.create', compact('tipoevento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Http::post('http://popayanturimsapi.test/v1/tipoevento',$request->all());

        return redirect()->route('tipoeventos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoeventos = Http::get('http://popayanturimsapi.test/v1/tipoevento/',$id);
        $tipoevento= $tipoeventos ->json();
        $evenCollection=collect($tipoevento);

        return view('tipoevento.show', compact('evenCollection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoevento = Tipoevento::find($id);

        return view('tipoevento.edit', compact('tipoevento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipoevento $tipoevento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoevento $tipoevento)
    {
        request()->validate(Tipoevento::$rules);

        $tipoevento->update($request->all());

        return redirect()->route('tipoeventos.index')
            ->with('success', 'Tipoevento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Http::delete('http://popayanturimsapi.test/v1/tipoevento/' . $id);
        return redirect()->route('tipoeventos.index');
    }
}
