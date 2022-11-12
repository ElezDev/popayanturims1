@extends('adminlte::page')

@section('template_title')
    {{ 'Show Calificasiones' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Calificasione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('calificasiones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $CalifiArray['comentarios'] }}
                        </div>
                        <div class="form-group">
                            <strong>Reseñas:</strong>
                            {{ $CalifiArray['reseñas'] }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
