@extends('adminlte::page')

@section('template_title')
    {{ $lugarArray['nombre']  ?? 'Show Lugar' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                 <div class="card-header bg bg-success" >
                        <div class="float-left">
                            <span class="card-title">Show Lugar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lugars.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $lugarArray['nombre'] }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $lugarArray['direccion']  }}
                        </div>
                        <div class="form-group">
                            <strong>Horarios:</strong>
                            {{ $lugarArray['horarios']  }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $lugarArray['descripcion'] }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                             <td>  <img  src="{{  'http://localhost/Popayanturimsapi/storage/app/public/Fotos/'.$lugarArray['foto_url'] }} "  " width="5%" style="border-radius:28px"/></td>
                            <td >
                        </div>
                        <div class="form-group">
                            <strong>Tipolugar Id:</strong>
                            {{ $lugarArray['tipolugar_id'] }}
                        </div>
                        <div class="form-group">
                            <strong>Rutas Id:</strong>
                            {{ $lugarArray['ruta_id'] }}
                        </div>
                        <div class="form-group">
                            <strong>Gastronomia Id:</strong>
                            {{ $lugarArray['gastronomia_id']}}
                        </div>
                        <div class="form-group">
                            <strong>Evento Id:</strong>
                            {{ $lugarArray['evento_id']}}
                        </div>
                        <div class="form-group">
                            <strong>Calificasiones Id:</strong>
                            {{ $lugarArray['calificasione_id'] }}
                        </div>
                        <div class="form-group">
                            <strong>Servicios Id:</strong>
                            {{ $lugarArray['servicio_id']}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
