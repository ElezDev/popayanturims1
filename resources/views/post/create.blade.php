@extends('adminlte::page')
@section('template_title')
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Post</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{('http://popayanturimsapi.test/v1/post')}}"  role="form" enctype="multipart/form-data">
                            @csrf

                            {{-- @include('post.form') --}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
