@extends('adminlte::page')

@section('template_title')
    Update Evento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                 <div class="card-header bg bg-success" >
                        <span class="card-title">Update Evento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('eventos.update', $EventArray['id']) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            @csrf

                            @include('evento.formedit')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
