


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('popayan', 'Popayan turims') }}</title>


    <link rel="stylesheet" href="css/estilos_2.css">


    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <script src="/static/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
</head>

<body class="body_c">



    <header id="header">

        <div class="container__header ">
            <div class="logo">
                <a class="navbar-brand nav__links" href="{{ url('/') }}">
                    {{ config('popayán', 'Popayán Turims') }}
                </a>
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>

                        <ul class="nav__link nav__link--menu">
                            <li class="nav__items">
                                <a class="nav__links" href="{{ route('iglesias') }}">{{ __('Iglesias') }}</a>
                            </li>

                            <li class="nav__items">
                                <a class="nav__links" href="{{ route('hoteles.index') }}">{{ __('Hoteles') }}</a>
                            </li>
                            <li class="nav__items">
                                <a class="nav__links" href="{{ route('museos.index') }}">{{ __('Museos') }}</a>
                            </li>
                            <li class="nav__items">
                                <a class="nav__links"
                                    href="{{ route('senderismo.index') }}">{{ __('Senderismo') }}</a>
                            </li>



                            <!-- Right Side Of Navbar -->

                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <button class="style-button  ">
                                        <span class="boxx">
                                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </span>
                                    </button>
                                @endif
                                @if (Route::has('register'))
                                    <button class="style-button">
                                        <span class="boxx">
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </span>
                                    </button>
                                @endif
                            @else
                                <li class="nav__items">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-danger" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        <img src="{{ 'http://localhost/popayanturims/public/storage/Avatar/' . Auth::user()->Avatar }}"
                                            style="width: 40px; height:40px; float: left; border-radius:50px; margin-right:25px">

                                    </a>
                                    <p class="text-danger"> {{ Auth::user()->name }}</p>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('ActualizarPerfil') }}">
                                            {{ __(' Perfil') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>


                    </ul>
                </nav>


                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>

            </div>

        </div>


    </header>






    <div class="pricipal_1" id="pricipal_1">
        <div class="overlay">

            <br>
            <!-- <button>mas </button> -->
        </div>
    </div>


    <main>


        <!-- imagen principal del header  -->


        <!-- informacion#1 -->


        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-6" style="min-height: 500px; rounded">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100"
                                src="https://images.pexels.com/photos/13200191/pexels-photo-13200191.jpeg?auto=compress&cs=tinysrgb&w=600"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pb-lg-5">
                        <div class="about-text bg-white p-4 p-lg-5 my-lg-5  radio-b">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Cauca</h6>
                            <h1 class="mb-3">Popayán "Ciudad Blanca"</h1>
                            <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum
                                labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat
                                duo eos et erat sed diam duo</p>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <img class="img-fluid  w-100 h-100"
                                        src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid  w-100 h-100"
                                        src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="">
                                </div>
                            </div>
                            <a href="" class="btn btn-primary mt-1">mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- informacion#1 fin  -->

        <!--
seccion 1 -->

        <div class="Carousel">
            <div class="containerr">

                <h2 align="left" class="featurette-heading ">Puntos esenciales en Popayán </h2>

                <p align="left" class="lead ">Lugares para ver, formas de recorrer y experiencias destacadas.</p>

            </div>
            {{-- parte#1 --}}
            <div class="slick-list" id="slick-list">


                {{-- carrosel --}}
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                        class="svg-inline--fa fa-chevron-left fa-w-10" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                        </path>
                    </svg>
                </button>
                <div class="slick-track" id="track">
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>

                </div>


                <button class="slick-arrow slick-next" id="button-next" data-button="button-next"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </button>

            </div>
            {{-- parte#2 --}}

            <div class="containerr">
                <h2 align="left" class="featurette-heading ">Actividades al aire libre </h2>

                <p align="left" class="lead ">Lugares para ver, formas de recorrer y experiencias destacadas.</p>

            </div>

            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                        class="svg-inline--fa fa-chevron-left fa-w-10" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                        </path>
                    </svg>
                </button>
                <div class="slick-track" id="track">
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </button>
            </div>

            <div class="containerr">
                <h2 align="left" class="featurette-heading ">gastronomía payanesa </h2>

                <p align="left" class="lead ">Lugares para ver, formas de recorrer y experiencias destacadas.</p>

            </div>



            {{--
parte#3  --}}


            <section class="container">


                <div class="card-grid">
                    <a class="card" href="#">
                        <div class="card__background"
                            style="background-image: url(https://media.istockphoto.com/photos/tamales-typical-colombian-food-wrapped-in-banana-leaves-picture-id1339919943?b=1&k=20&m=1339919943&s=612x612&w=0&h=VKh9WbXSF_YL8VfQVtfcFBe4lfdEBy6_gtzIMRhGj0o=)">
                        </div>
                        <div class="card__content">
                            <p class="card__category">Gastronomia</p>
                            <h3 class="card__heading">algo de texto</h3>
                        </div>
                    </a>
                    <a class="card" href="#">
                        <div class="card__background"
                            style="background-image: url(https://images.pexels.com/photos/1365425/pexels-photo-1365425.jpeg?auto=compress&cs=tinysrgb&w=600)">
                        </div>
                        <div class="card__content">
                            <p class="card__category">senderismo</p>
                            <h3 class="card__heading">algo de texto</h3>
                        </div>
                    </a>
                    <a class="card" href="#">
                        <div class="card__background"
                            style="background-image: url(https://images.pexels.com/photos/9695850/pexels-photo-9695850.jpeg?auto=compress&cs=tinysrgb&w=600)">
                        </div>
                        <div class="card__content">
                            <p class="card__category">Artesanias</p>
                            <h3 class="card__heading">algo de texto</h3>
                        </div>
                    </a>

                    <a class="card" href="#">
                        <div class="card__background"
                            style="background-image: url(https://images.pexels.com/photos/1671014/pexels-photo-1671014.jpeg?auto=compress&cs=tinysrgb&w=600)">
                        </div>
                        <div class="card__content">
                            <p class="card__category">Museos</p>
                            <h3 class="card__heading">algo de texto </h3>
                        </div>
                    </a>

                </div>


            </section>
            <!--

seccion 1 fin -->

            {{-- seccion 3 mapa --}}

            <section class="main-content">
                <div class="container">
                    <br>
                    <br>

                    <div class="boxm">
                        <div class="row align-center">
                            <div class="col-md-7">
                                <p class="uppercase mb-1 color_bk">Sub Section</p>
                                <h1 class="display-4 font-weight-bold color_bk">Video Section</h1>
                                <p class="color_bk">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque
                                    nulla voluptatibus sed ex repudiandae animi numquam adipisci omnis doloribus veniam,
                                    consectetur accusantium suscipit sint, dolorem nostrum nihil! Commodi, quos odio?
                                </p>

                            </div>
                            <div class="col-md-4 offset-md-1">
                                <a href="#!" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- seccion 3 mapa fin --}}


    </main>


    {{-- Footer  pie de pagina --}}
    <Footer>
        <div class="container__footer">

            <div class="box__footer">
                <div class="logo">
                    <img src="" alt="popayán turims">
                </div>
                <div class="terms">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum reiciendis et quasi aut facere vitae
                    vero. Inventore, minus ab voluptate modi repellat, pariatur tempora quisquam, debitis facilis
                    explicabo voluptatem. A.
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


    {{-- <script src="./js/slider.js"></script>
        <script src="./js/questions.js"></script>
        <script src="./js/menu.js"></script>
        <script src="./js/letras.js"></script> --}}
    <script src="./js/main.js"></script>


    <!-- Footer -->


</body>

</html>
