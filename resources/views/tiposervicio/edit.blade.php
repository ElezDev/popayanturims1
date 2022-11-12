@extends('adminlte::page')

@section('template_title')
    Update Tiposervicio
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                 <div class="card-header bg bg-success" >
                        <span class="card-title">Update Tiposervicio</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tiposervicios.update',$tipoS['id']) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            @csrf

                            @include('tiposervicio.formedi')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
