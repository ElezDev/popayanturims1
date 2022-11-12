@extends('adminlte::page')

@section('template_title')
    {{ $evento->name ?? 'Show Evento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{  $EvenArray['nombre'] }}
                        </div>
                        <div class="form-group">
                            <strong>Ubucacion:</strong>
                            {{  $EvenArray['ubicacion'] }}
                        </div>
                        <div class="form-group">
                            <strong>Horarios:</strong>
                            {{  $EvenArray['horarios']}}
                        </div>
                        <div class="form-group">
                            <strong>Fecha De Inicio:</strong>
                            {{  $EvenArray['fechainicio'] }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{  $EvenArray['fechafin'] }}
                       </div>

                        <div class="form-group">
                            <strong>Tipo de evento:</strong>
                            {{  $EvenArray['tipoeventos_id'] }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
