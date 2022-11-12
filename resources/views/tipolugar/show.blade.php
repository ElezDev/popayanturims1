@extends('adminlte::page')

@section('template_title')
    {{'Show Tipolugar' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipolugar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipolugars.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $TlugarArray['nombre']}}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $TlugarArray['descripcion']}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
