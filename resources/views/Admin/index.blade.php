@extends('adminlte::page')

@section('title', 'AdminPT')

@section('content_header')
    <h1><span class="pf pf-atm"> Hola de nuevo {{ Auth::user()->name }}</span></h1>
@stop

@section('content')


    <div>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="Card bg-primary text-white mb-4">
                    <div class="card-body">Usuarios

                        <h2>{{ $TotalUser }}</h2>
                    </div>

                    <div class="card-footer d-flex-aling-itemscenter justify-content-between">
                        <a class="small text-white stretched-link" href="http://popayanturims.test/usuarios">Ver detalles</a>
                    </div>
                </div>
            </div>
         
        

            <p class="h5">Bienvenido a Popayan Turims</p>


        @stop

        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
        @stop

        @section('js')
            <script>
                console.log('Hi!');
            </script>
        @stop
