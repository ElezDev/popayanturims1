<?php

namespace App\Http\Controllers;

use App\Models\Tipolugar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

/**
 * Class TipolugarController
 * @package App\Http\Controllers
 */
class TipolugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipolugar = Http::get('http://popayanturimsapi.test/v1/tipolugar');
        $tipolugaresArray= $tipolugar ->json();

        return view('tipolugar.index', compact('tipolugaresArray'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('tipolugar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Http::post('http://popayanturimsapi.test/v1/tipolugar',$request->all());

        return redirect()->route('tipolugars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipolugar = Tipolugar::find($id);

        return view('tipolugar.show', compact('tipolugar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipolugar = Tipolugar::find($id);

        return view('tipolugar.edit', compact('tipolugar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipolugar $tipolugar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipolugar $tipolugar)
    {
        request()->validate(Tipolugar::$rules);

        $tipolugar->update($request->all());

        return redirect()->route('tipolugars.index')
            ->with('success', 'Tipolugar updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Http::delete('http://popayanturimsapi.test/v1/tipolugar/' . $id);
        return redirect()->route('tipolugars.index');
    }
}