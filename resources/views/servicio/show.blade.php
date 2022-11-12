@extends('adminlte::page')

@section('template_title')
    {{  'Show Servicio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ServiArray['nombre']}}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{  $ServiArray['descripcion'] }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicasion:</strong>
                            {{  $ServiArray['ubicacion'] }}
                        </div>
                        <div class="form-group">
                            <strong>Horarios:</strong>
                            {{  $ServiArray['horarios'] }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de servicio:</strong>
                            {{  $ServiArray['tiposervicio_id']}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
