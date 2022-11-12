@extends('adminlte::page')
@section('template_title')
    Update Servicio
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                <div class="card-header bg bg-success" >
                        <span class="card-title">Update Servicio</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('servicios.update', $ServiArray['id']) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('servicio.formedit')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
