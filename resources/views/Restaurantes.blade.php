@extends('layouts.app')

@section('template_title')

@section('content')


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <style>
            #map {
                padding: 50%;
                height: 50%;
                width: 20%
            }

            html,
            body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>

    </head>

    <body>
        <div id="map">

        </div>

        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCs9NxCaIhxr2ON400Y2sucRLIVe33Ml2w&callback=initMap"></script>
        <Script>
        const mapDiv = document.getElementByIn("map");
        let map;
        function initMap(){
            map = new google.maps.Map(document.getElementById('map'), {
  center: {lat: 2.433, lng:  -76.617},
  zoom: 8
});
        }
        </Script>
    </body>

    </html>





















































@endsection



{{-- @foreach ($lugar as $lugar)
              @if ($lugar->tipolugar_id == 5)

                  <div class="card-imga col-3">
                      <div class="text-box">
                          <div class="face front col-3">
                              <img  src="{{ 'http://localhost/popayanturims/public/storage/Fotos/'.$lugar->foto_url }} " width="95%"alt="" />
                              <h3>{{ $lugar->nombre }}</h3>
                          </div>
                          <div class="face back">
                              <div class="text-container">
                                  <h3>{{ $lugar->descripcion }}</h3>
                                  <h3>Direcion: {{ $lugar->direccion }}</h3>
                                  <h3>Horarios: {{ $lugar->horarios }}</h3>

                              </div>
                          </div>
                      </div>
                  </div>
              @endif
          @endforeach --}}
