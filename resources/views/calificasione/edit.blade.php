@extends('adminlte::page')

@section('template_title')
    Update Calificasione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                     <div class="card-header bg bg-success" >
                        <span class="card-title">Update Calificasione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('calificasiones.update',$CalifiArray['id'] ) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            @csrf

                            @include('calificasione.formulario2')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
