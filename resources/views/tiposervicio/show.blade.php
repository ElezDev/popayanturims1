@extends('adminlte::page')
@section('template_title')
    {{ 'Show tipos de servicio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg bg-success" >
                        <div class="float-left">
                            <span class="card-title">Tipos de servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tiposervicios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $TipoSerArray['nombre'] }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
