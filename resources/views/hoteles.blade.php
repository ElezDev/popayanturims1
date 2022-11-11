@extends('layouts.app')

@section('template_title')

@section('content')

    <div class="bag_hotel" id=" bag_hotel">
        <div class="overlay">
            <h1>popayan </h1>
            <h3> Gastronomia en popayan </h3>

            <br>
            <!-- <button>mas </button> -->
        </div>
    </div>

    {{-- TEXTO --}}

    {{-- cartas carosel --}}
    <main>

        <div class="Carousel ">
            <div class="containerr">
                <h2 align="left" class="featurette-heading ">Puntos esenciales en Popayán </h2>

                <p align="left" class="lead ">Lugares para ver, formas de recorrer y experiencias destacadas.</p>

            </div>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                        class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
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
                                    <img src="https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                    <img src="https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                    <img src="https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                    <img src="https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                    <img src="https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>

                </div>


                <button class="slick-arrow slick-next" id="button-next" data-button="button-next"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        {{--
FIN DE TEXTO  --}}




        <!-- Blog Start  carosel-->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Blog Detail Start -->
                        <div class="pb-3">
                            <div class="blog-item">
                                <!-- Carousel Start -->
                                <div class="container-fluid mb-3">
                                    <div class="row px-xl-">
                                        <div class="col-lg-">
                                            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0"
                                                data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#header-carousel" data-slide-to="0" class="active">
                                                    </li>
                                                    <li data-target="#header-carousel" data-slide-to="1"></li>
                                                    <li data-target="#header-carousel" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item position-relative active "
                                                        style="height: 500px;
                          width: 630px;">
                                                        <img class="position-absolute w-100 h-100"
                                                            src="https://images.pexels.com/photos/13999909/pexels-photo-13999909.png?auto=compress&cs=tinysrgb&w=600"
                                                            style="object-fit: cover;" class="imagen-carousel">
                                                        <div
                                                            class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                                            <div class="p-3" style="max-width: 700px;">
                                                                <h1
                                                                    class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                                                    hotelx </h1>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @foreach ($lugarArray as $lugars)
                                                        @if ($lugars['tipolugar_id']==10)
                                                            <div class="carousel-item position-relative"
                                                                style="height: 500px;

                                                       width: 500px;">

                                                                <img class="position-absolute w-100 h-100"
<<<<<<< HEAD
                                                               
                                                                    src="{{  'http://localhost/Popayanturimsapi/storage/app/public/Fotos/'. $lugars['foto_url'] }}"
=======
                                                                    src="{{ 'http://localhost/Popayanturimsapi/storage/app/public/Fotos/'. $lugars['foto_url'] }}"
>>>>>>> 5fe6ca5753e0c11c9abd26e2410d89f97b9e218f
                                                                    style="object-fit: cover;">
                                                                <div
                                                                    class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                                                    <div class="p-3" style="max-width: 700px;">
                                                                        <h1
                                                                            class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                                                            {{ $lugars['nombre'] }}</h1>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    <div class="carousel-item position-relative"
                                                        style="height: 500px;
                        width: 730px;">
                                                        <img class="position-absolute w-100 h-100"
                                                            style="object-fit: cover;">
                                                        <div
                                                            class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                                            <div class="p-3" style="max-width: 700px;">
                                                                <h1
                                                                    class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                                                    hotel-z</h1>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Carousel End -->

                            </div>
                            <div class="bg-white mb-3" style="padding: 30px;">
                                <div class="d-flex mb-3">
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                    <span class="text-primary px-2">|</span>
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Popayán
                                        Turims</a>
                                </div>
                                <h2 class="mb-3">Dolor justo sea kasd lorem clita justo diam amet</h2>
                                <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut
                                    magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet
                                    amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at
                                    sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et
                                    aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren
                                    sit stet no diam kasd vero.</p>
                                <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                                    vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                                    nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                                    ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                                    clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                                    justo dolore sit invidunt.</p>

                            </div>
                        </div>
                        <!-- Blog Detail End -->



                        <!-- Comment Form End -->
                    </div>

                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <!-- Author Bio -->

                        <!-- Search Form -->
                        <form action={{ route('hoteles.index') }}" method="GET">
                            <div class="mb-5">
                                <div class="bg-white" style="padding: 30px;">
                                    <div class="input-group">
                                        <input type="text" name="buscar" class="form-control p-4"
                                            placeholder="filtrar">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-primary border-primary text-white"><i
                                                    class="fa fa-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Category List -->
                        <div class="mb-5">
                            <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Clacificar por precios</h4>
                            <div class="bg-white" style="padding: 30px;">
                                <ul class="list-inline m-0">
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>tex</a>
                                        <span class="badge badge-primary badge-pill">150</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>tex</a>
                                        <span class="badge badge-primary badge-pill">131</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>tex</a>
                                        <span class="badge badge-primary badge-pill">78</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>tex</a>
                                        <span class="badge badge-primary badge-pill">56</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>tex</a>
                                        <span class="badge badge-primary badge-pill">98</span>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <!-- Recent Post -->
                        <div class="mb-5">
                            <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                                <img class="img-fluid w-25 h-25"
                                    src="https://images.pexels.com/photos/3155666/pexels-photo-3155666.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" style="object-fit: cover;">
                                <div class="pl-3">
                                    <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                    <small>Jan 01, 2050</small>
                                </div>
                            </a>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                                <img class="img-fluid  w-25 h-25"
                                    src="https://images.pexels.com/photos/4112236/pexels-photo-4112236.jpeg?auto=compress&cs=tinysrgb&w=600 "
                                    alt="" style="object-fit: cover;">
                                <div class="pl-3">
                                    <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                    <small>Jan 01, 2050</small>
                                </div>
                            </a>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                                <img class="img-fluid w-25 h-25"
                                    src="https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" style="object-fit: cover;">
                                <div class="pl-3">
                                    <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                    <small>Jan 01, 2050</small>
                                </div>
                            </a>
                        </div>

                        <!-- Tag Cloud -->
                        <div class="mb-5">
                            <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h4>
                            <div class="d-flex flex-wrap m-n1">
                                <a href="" class="btn btn-light m-1">Design</a>
                                <a href="" class="btn btn-light m-1">Development</a>
                                <a href="" class="btn btn-light m-1">Marketing</a>
                                <a href="" class="btn btn-light m-1">SEO</a>
                                <a href="" class="btn btn-light m-1">Writing</a>
                                <a href="" class="btn btn-light m-1">Consulting</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        {{-- cards con los hoteles  --}}
        <section class="main-content">
            <div class="container">
                <h1 class="text-uppercase">Hotel Popayán</h1>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 py-3">
                        <div class="hotel-card bg-white rounded-lg shadow overflow-hidden d-block d-lg-flex">
                            <div class="hotel-card_images">
                                <div id="bootstrapCarousel" class="carousel slide h-100" data-ride="carousel">
                                    <div class="carousel-inner h-100">
                                        <div class="carousel-item h-100 active">
                                            <img src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="https://images.pexels.com/photos/2017802/pexels-photo-2017802.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="https://images.pexels.com/photos/1001965/pexels-photo-1001965.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#bootstrapCarousel" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#bootstrapCarousel" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="hotel-card_info p-4">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="mb-0 mr-2">Hotel san martin </h5>
                                    <div>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <a href="#!" class="text-dark ml-auto"><i class="far fa-heart fa-lg"></i></a>
                                </div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="hotel-card_details">
                                        <div class="text-muted mb-2"><i class="fas fa-map-marker-alt"></i> Popayán</div>
                                        <div class="mb-2"><span class="badge badge-primary">4.5</span> <a
                                                href="#!" class="text-muted"><strong>bueno</strong> (56
                                                Oponiones)</a></div>
                                        <div class="amnities d-flex mb-3">
                                            <img class="mr-2" src="images/icons/desk-bell.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/single-bed.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/towels.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/wifi.svg" data-toggle="tooltip"
                                                data-placement="top" title="Wifi" alt="Wifi">
                                        </div>
                                        <ul class="hotel-checklist pl-0 mb-0">
                                            <li><i class="fa fa-check text-success"></i> text</li>
                                            <li><i class="fa fa-check text-success"></i> text </li>
                                            <li><i class="fa fa-check text-success"></i>text</li>
                                        </ul>
                                    </div>
                                    <div class="hotel-card_pricing text-center">
                                        <h3>256.960</h3>
                                        <div class="d-flex">
                                            <h6 class="text-striked text-muted mr-2">296.960</h6>
                                            <h6 class="text-success">32% off</h6>
                                        </div>
                                        <button class="btn btn-primary">Ver oferta</button>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>

                    <br>

                    <div class="col-sm-6 col-md-6 col-lg-6 py-3">
                        <div class="hotel-card bg-white rounded-lg shadow overflow-hidden d-block d-lg-flex">
                            <div class="hotel-card_images">
                                <div id="bootstrapCarousel" class="carousel slide h-100" data-ride="carousel">
                                    <div class="carousel-inner h-100">
                                        <div class="carousel-item h-100 active">
                                            <img src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="https://images.pexels.com/photos/2017802/pexels-photo-2017802.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="https://images.pexels.com/photos/1001965/pexels-photo-1001965.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#bootstrapCarousel" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#bootstrapCarousel" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="hotel-card_info p-4">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="mb-0 mr-2">Hotel san martin </h5>
                                    <div>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <a href="#!" class="text-dark ml-auto"><i class="far fa-heart fa-lg"></i></a>
                                </div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="hotel-card_details">
                                        <div class="text-muted mb-2"><i class="fas fa-map-marker-alt"></i> Popayán</div>
                                        <div class="mb-2"><span class="badge badge-primary">4.5</span> <a
                                                href="#!" class="text-muted"><strong>bueno</strong> (56
                                                Oponiones)</a></div>
                                        <div class="amnities d-flex mb-3">
                                            <img class="mr-2" src="images/icons/desk-bell.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/single-bed.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/towels.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/wifi.svg" data-toggle="tooltip"
                                                data-placement="top" title="Wifi" alt="Wifi">
                                        </div>
                                        <ul class="hotel-checklist pl-0 mb-0">
                                            <li><i class="fa fa-check text-success"></i> text</li>
                                            <li><i class="fa fa-check text-success"></i> text </li>
                                            <li><i class="fa fa-check text-success"></i>text</li>
                                        </ul>
                                    </div>
                                    <div class="hotel-card_pricing text-center">
                                        <h3>256.960</h3>
                                        <div class="d-flex">
                                            <h6 class="text-striked text-muted mr-2">296.960</h6>
                                            <h6 class="text-success">32% off</h6>
                                        </div>
                                        <button class="btn btn-primary">Ver oferta</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="col-sm-6 col-md-6 col-lg-6 py-3">
                        <div class="hotel-card bg-white rounded-lg shadow overflow-hidden d-block d-lg-flex">
                            <div class="hotel-card_images">
                                <div id="bootstrapCarousel" class="carousel slide h-100" data-ride="carousel">
                                    <div class="carousel-inner h-100">
                                        <div class="carousel-item h-100 active">
                                            <img src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="https://images.pexels.com/photos/2017802/pexels-photo-2017802.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="https://images.pexels.com/photos/1001965/pexels-photo-1001965.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#bootstrapCarousel" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#bootstrapCarousel" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="hotel-card_info p-4">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="mb-0 mr-2">Hotel san martin </h5>
                                    <div>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <a href="#!" class="text-dark ml-auto"><i class="far fa-heart fa-lg"></i></a>
                                </div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="hotel-card_details">
                                        <div class="text-muted mb-2"><i class="fas fa-map-marker-alt"></i> Popayán</div>
                                        <div class="mb-2"><span class="badge badge-primary">4.5</span> <a
                                                href="#!" class="text-muted"><strong>bueno</strong> (56
                                                Oponiones)</a></div>
                                        <div class="amnities d-flex mb-3">
                                            <img class="mr-2" src="images/icons/desk-bell.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/single-bed.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/towels.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/wifi.svg" data-toggle="tooltip"
                                                data-placement="top" title="Wifi" alt="Wifi">
                                        </div>
                                        <ul class="hotel-checklist pl-0 mb-0">
                                            <li><i class="fa fa-check text-success"></i> text</li>
                                            <li><i class="fa fa-check text-success"></i> text </li>
                                            <li><i class="fa fa-check text-success"></i>text</li>
                                        </ul>
                                    </div>
                                    <div class="hotel-card_pricing text-center">
                                        <h3>256.960</h3>
                                        <div class="d-flex">
                                            <h6 class="text-striked text-muted mr-2">296.960</h6>
                                            <h6 class="text-success">32% off</h6>
                                        </div>
                                        <button class="btn btn-primary">Ver oferta</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="col-sm-6 col-md-6 col-lg-6 py-3">
                        <div class="hotel-card bg-white rounded-lg shadow overflow-hidden d-block d-lg-flex">
                            <div class="hotel-card_images">
                                <div id="bootstrapCarousel" class="carousel slide h-100" data-ride="carousel">
                                    <div class="carousel-inner h-100">
                                        <div class="carousel-item h-100 active">
                                            <img src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="https://images.pexels.com/photos/2017802/pexels-photo-2017802.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                        <div class="carousel-item h-100">
                                            <img src="https://images.pexels.com/photos/1001965/pexels-photo-1001965.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                class="d-block w-100" alt="Hotel Image">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#bootstrapCarousel" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#bootstrapCarousel" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>

                            <div class="hotel-card_info p-4">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="mb-0 mr-2">Hotel san martin </h5>
                                    <div>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <a href="#!" class="text-dark ml-auto"><i class="far fa-heart fa-lg"></i></a>
                                </div>
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="hotel-card_details">
                                        <div class="text-muted mb-2"><i class="fas fa-map-marker-alt"></i> Popayán</div>
                                        <div class="mb-2"><span class="badge badge-primary">4.5</span> <a
                                                href="#!" class="text-muted"><strong>bueno</strong> (56
                                                Oponiones)</a></div>
                                        <div class="amnities d-flex mb-3">
                                            <img class="mr-2" src="images/icons/desk-bell.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/single-bed.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/towels.svg" data-toggle="tooltip"
                                                data-placement="top" title=" text" alt=" text">
                                            <img class="mr-2" src="images/icons/wifi.svg" data-toggle="tooltip"
                                                data-placement="top" title="Wifi" alt="Wifi">
                                        </div>
                                        <ul class="hotel-checklist pl-0 mb-0">
                                            <li><i class="fa fa-check text-success"></i> text</li>
                                            <li><i class="fa fa-check text-success"></i> text </li>
                                            <li><i class="fa fa-check text-success"></i>text</li>
                                        </ul>
                                    </div>
                                    <div class="hotel-card_pricing text-center">
                                        <h3>256.960</h3>
                                        <div class="d-flex">
                                            <h6 class="text-striked text-muted mr-2">296.960</h6>
                                            <h6 class="text-success">32% off</h6>
                                        </div>
                                        <button class="btn btn-primary">Ver oferta</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Packages Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <div class="text-center mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                    <h1>Pefect Tour Packages</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid  "
                                src="https://images.pexels.com/photos/3678857/pexels-photo-3678857.jpeg?auto=compress&cs=tinysrgb&w=600 "
                                alt="" style="object-fit: cover;
                   ">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i
                                            class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                                        days</small>
                                    <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                                </div>
                                <a class="h5 text-decoration-none" href="">Discover amazing places of the world
                                    with us</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                            <small>(250)</small>
                                        </h6>
                                        <h5 class="m-0">$350</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/3678857/pexels-photo-3678857.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i
                                            class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                                        days</small>
                                    <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                                </div>
                                <a class="h5 text-decoration-none" href="">Discover amazing places of the world
                                    with us</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                            <small>(250)</small>
                                        </h6>
                                        <h5 class="m-0">$350</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/3678857/pexels-photo-3678857.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i
                                            class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                                        days</small>
                                    <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                                </div>
                                <a class="h5 text-decoration-none" href="">Discover amazing places of the world
                                    with us</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                            <small>(250)</small>
                                        </h6>
                                        <h5 class="m-0">$350</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/3678857/pexels-photo-3678857.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i
                                            class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                                        days</small>
                                    <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                                </div>
                                <a class="h5 text-decoration-none" href="">Discover amazing places of the world
                                    with us</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                            <small>(250)</small>
                                        </h6>
                                        <h5 class="m-0">$350</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/3678857/pexels-photo-3678857.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i
                                            class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                                        days</small>
                                    <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                                </div>
                                <a class="h5 text-decoration-none" href="">Discover amazing places of the world
                                    with us</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                            <small>(250)</small>
                                        </h6>
                                        <h5 class="m-0">$350</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid"
                                src="https://images.pexels.com/photos/3678857/pexels-photo-3678857.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i
                                            class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                                        days</small>
                                    <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                                </div>
                                <a class="h5 text-decoration-none" href="">Discover amazing places of the world
                                    with us</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                            <small>(250)</small>
                                        </h6>
                                        <h5 class="m-0">$350</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Packages End -->





    </main>

@endsection


{{--
        <div id="cards_landscape_wrap-2">
            <div class="container ">
                <div class="row">
                    @foreach ($lugar as $lugar)
                        @if ($lugar->tipolugar_id == 4)

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
                    @endforeach
             </section> --}}
