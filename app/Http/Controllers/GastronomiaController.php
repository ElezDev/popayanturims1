<?php

namespace App\Http\Controllers;

use App\Models\Gastronomia;
use App\Models\Tipoplato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * Class GastronomiaController
 * @package App\Http\Controllers
 */
class GastronomiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastronomia = Http::get('http://popayanturimsapi.test/v1/gastronomia');
        $gastronomiaArray= $gastronomia ->json();
        return view('gastronomia.index', compact('gastronomiaArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('gastronomia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Http::post('http://popayanturimsapi.test/v1/gastronomia',$request->all());
        return redirect()->route('gastronomia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gastronomia = Gastronomia::find($id);

        return view('gastronomia.show', compact('gastronomia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gastronomia = Gastronomia::find($id);

        return view('gastronomia.edit', compact('gastronomia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Gastronomia $gastronomia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gastronomia $gastronomia)
    {
        request()->validate(Gastronomia::$rules);

        $gastronomia->update($request->all());

        return redirect()->route('gastronomias.index')
            ->with('success', 'Gastronomia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Http::delete('http://popayanturimsapi.test/v1/servicio/',$id);



        return redirect()->route('gastronomias.index');

    }
}
