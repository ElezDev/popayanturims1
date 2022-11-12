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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $Tipolugar = Http::get('http://popayanturimsapi.test/v1/tipolugar');
        $tipolugares = $Tipolugar->json();
        $colletion=collect($tipolugares);
        $pluckedTl = $colletion->pluck('nombre');

        $ruta = Http::get('http://popayanturimsapi.test/v1/ruta');
        $RutaArray = $ruta->json();
        $colletion=collect($RutaArray);
        $pluckedrt = $colletion->pluck('ubicacion');

        $Gastronomia = Http::get('http://popayanturimsapi.test/v1/gastronomia');
        $GastroArray = $Gastronomia->json();
        $colletion=collect($GastroArray);
        $pluckedGs = $colletion->pluck('ubicacion');

        $Evento = Http::get('http://popayanturimsapi.test/v1/Evento');
        $EventoArray = $Evento->json();
        $colletion=collect($EventoArray);
        $pluckedEv = $colletion->pluck('ubicacion');

        $calificasiones = Http::get('http://popayanturimsapi.test/v1/calificasiones');
        $CalifiArray = $calificasiones->json();
        $colletion=collect($CalifiArray);
        $pluckedCal = $colletion->pluck('comentarios');

        $servicio = Http::get('http://popayanturimsapi.test/v1/servicio');
        $ServiArray = $servicio->json();
        $colletion=collect($ServiArray);
        $pluckedSer = $colletion->pluck('nombre');



        return view('lugar.create',compact('pluckedTl','pluckedrt','pluckedGs','pluckedEv','pluckedCal','pluckedSer'));
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


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lugars = Http::get('http://popayanturimsapi.test/v1/lugar/'.$id);
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
     $lugars= http::get('http://popayanturimsapi.test/v1/lugar/'.$id);
     $lugarsArray=$lugars->json();

     $Tipolugar = Http::get('http://popayanturimsapi.test/v1/tipolugar');
     $tipolugares = $Tipolugar->json();
     $colletion=collect($tipolugares);
     $pluckedTl = $colletion->pluck('nombre');

     $ruta = Http::get('http://popayanturimsapi.test/v1/ruta');
     $RutaArray = $ruta->json();
     $colletion=collect($RutaArray);
     $pluckedrt = $colletion->pluck('ubicacion');

     $Gastronomia = Http::get('http://popayanturimsapi.test/v1/gastronomia');
     $GastroArray = $Gastronomia->json();
     $colletion=collect($GastroArray);
     $pluckedGs = $colletion->pluck('ubicacion');

     $Evento = Http::get('http://popayanturimsapi.test/v1/Evento');
     $EventoArray = $Evento->json();
     $colletion=collect($EventoArray);
     $pluckedEv = $colletion->pluck('ubicacion');

     $calificasiones = Http::get('http://popayanturimsapi.test/v1/calificasiones');
     $CalifiArray = $calificasiones->json();
     $colletion=collect($CalifiArray);
     $pluckedCal = $colletion->pluck('comentarios');

     $servicio = Http::get('http://popayanturimsapi.test/v1/servicio');
     $ServiArray = $servicio->json();
     $colletion=collect($ServiArray);
     $pluckedSer = $colletion->pluck('nombre');

     return view('lugar.edit',compact('lugarsArray','pluckedTl','pluckedrt','pluckedGs','pluckedEv','pluckedCal','pluckedSer'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lugar $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        http::put('http://popayanturimsapi.test/v1/lugar'.$id,$request->all());
        //  return $request;
         return redirect()->route('lugars.index');



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
