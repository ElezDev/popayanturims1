<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use App\Models\Tipolugar;
use App\Models\Ruta;
use App\Models\Gastronomia;
use App\Models\Evento;
use App\Models\Calificasione;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PDF;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;




/**
 * Class LugarController
 * @package App\Http\Controllers
 */
class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugars = Http::get('http://popayanturimsapi.test/v1/lugar');
        $lugarArray = $lugars->json();

        $Tipolugar = Http::get('http://popayanturimsapi.test/v1/tipolugar');
        $tipolugares = $Tipolugar->json();

        $ruta = Http::get('http://popayanturimsapi.test/v1/ruta');
        $RutaArray = $ruta->json();

        $Gastronomia = Http::get('http://popayanturimsapi.test/v1/gastronomia');
        $GastronomiaArray = $Gastronomia->json();

        $Evento = Http::get('http://popayanturimsapi.test/v1/Evento');
        $EventoArray = $Evento->json();

        $calificasiones = Http::get('http://popayanturimsapi.test/v1/calificasiones');
        $CalifiArray = $calificasiones->json();

        $servicio = Http::get('http://popayanturimsapi.test/v1/servicio');
        $ServiArray = $servicio->json();

        return view('lugar.index', compact('lugarArray', 'tipolugares', 'RutaArray','GastronomiaArray','EventoArray','CalifiArray','CalifiArray','ServiArray'));


        // $TipolugarArray = Tipolugar::pluck('nombre');
        // return $Tipolugar;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
       
        return view('lugar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         $lugar = Http::post('http://popayanturimsapi.test/v1/lugar',$request->all());
         return $lugar;
// request()->validate(Lugar::$rules);
// $lugar = $request->all();


// $file=$request->file("foto_url");
// $nombreArchivo = "img_".time().".".$file->guessExtension();
// $request->file('foto_url')->storeAs('public/Fotos', $nombreArchivo );
// $lugar['foto_url']= "$nombreArchivo";
// Lugar::create($lugar);

//    return redirect()->route('lugars.index')
//         ->with('success', 'Lugar created successfully.');





    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lugars = Http::get('http://popayanturimsapi.test/v1/lugar');
        $lugarArray = $lugars->json();

        return view('lugar.show', compact('lugarArray'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $lugar = Lugar::find($id);
        $tipolugar = Tipolugar::pluck('nombre','id');#consulta para retornar
        $ruta = Ruta::pluck('ubicasion');
        $gastronomia = Gastronomia::pluck('ubicasion');
        $evento = Evento::pluck('nombre');
        $calificasiones = Calificasione::pluck('comentarios');
        $servicio = Servicio ::pluck('nombre');
  return view('lugar.edit', compact('lugar','tipolugar','ruta','gastronomia','evento','calificasiones','servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lugar $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lugar $lugar)
    {
        http::put('http://popayanturimsapi.test/v1/lugar'.$lugar,$request->all());
        // request()->validate(Lugar::$rules);
        $lugar->update($request->all());

        $file=$request->file("foto_url");
$nombreArchivo = "img_".time().".".$file->guessExtension();
$request->file('foto_url')->storeAs('public/Fotos', $nombreArchivo );
$lugar['foto_url']= "$nombreArchivo";
$lugar->save();

        return redirect()->route('lugars.index')
        ->with('success', 'Lugar update successfully');



    }





    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        Http::delete('http://popayanturimsapi.test/v1/lugar/'.$id);

        return redirect()->route('lugars.index');

    }


    public function pdf(){
        $lugars = Lugar::paginate();


        $pdf = PDF::loadView('lugar.pdf',['lugars'=>$lugars]);
        return $pdf->stream();


    }

    public function form(){
        $lugars = Lugar::paginate();
        $lugar= Lugar::all();
        return view('lugar.formulario',compact('lugars'));


    }
}
