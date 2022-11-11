<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('popayan', 'Popayan turims') }}</title>


    <link rel="stylesheet" href="css/estilos_2.css">
     <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <script src="/static/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm ">

                <a class="navbar-brand text-danger" href="{{ url('/') }}">
                    {{ config('popayán', 'Popayán Turims') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- aqui las rutas -->
                    <ul class="navbar-nav me-auto ">



                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('iglesias') }}">{{ __('Iglesias') }}</a>



                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('hoteles.index') }}">{{ __('Hoteles') }}</a>
                            <li class="nav-item   text-white">
                            <a class="nav-link  text-white" href="{{ route('museos.index') }}">{{ __('Museos') }}</a>
                            <li class="nav-item  text-white">
                                <a class="nav-link  text-white" href="{{ route('senderismo.index') }}">{{ __('Senderismo') }}</a>
                        </li>




                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <button  type="submit" class="btn btn-outline-primary mb-4 button_color">

                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>

                          {{-- </button> --}}
                            @endif
                            @if (Route::has('register'))
                            <button type="submit" class="btn btn-outline-primary mb-4 button_color">

                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </button>

                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  class="nav-link dropdown-toggle text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('ActualizarPerfil') }}">
                                     {{ __('Editar Perfil') }}
                                 </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

           </nav>
    </div>


            @yield('content')






    {{-- Footer  pie de pagina --}}
    <Footer>
      <div class="container__footer">

          <div class="box__footer">
              <div class="logo">
                  <img src="" alt="popayán turims">
              </div>
              <div class="terms">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum reiciendis et quasi aut facere vitae vero. Inventore, minus ab voluptate modi repellat, pariatur tempora quisquam, debitis facilis explicabo voluptatem. A.
              </div>
          </div>

          <div class="box__footer">
              <h2>contantos</h2>
              <a href="#">sdgfsgf</a>
              <a href="#">Adfsdf</a>
              <a href="#">twx</a>
              <a href="#">text</a>
          </div>

          <div class="box__footer">
              <h2>Compañia</h2>
              <a href="#">Acercda de</a>
              <a href="#">Trabajos</a>
              <a href="#">Procesos</a>
              <a href="#">Servicios</a>
          </div>

          <div class="box__footer">
              <h2>Redes Sociales</h2>
              <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
              <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
              <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
              <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
          </div>
      </div>

      <div class="box__copyright">
          <hr>
          <p>Todos los derechos reservados © 2022 <b>POPAYÁM_TURIMS@PROGRAMER</b></p>
      </div>
  </Footer>

{{--
         <script src="./js/slider.js"></script>
        <script src="./js/questions.js"></script>
        <script src="./js/menu.js"></script>
        <script src="./js/letras.js"></script> --}}
        <script src="./js/main.js"></script>
        <script src="./js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>

    <!-- Footer -->


    @yield('js')

</body>

</html>
