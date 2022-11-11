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

    <main>


        {{-- carousel parte 1 --}}
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
        {{-- carousel parte 1 fin --}}

        <div class="containerr">
            <h2 align="left" class="featurette-heading ">Las mejores rutas en Popayán </h2>

            <p align="left" class="lead ">Lugares para ver, formas de recorrer y experiencias destacadas.</p>

        </div>
        {{-- <div class="container"> --}}
        

        </div>
        {{-- titulo text --}}
       

        <!-- Blog Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Blog Detail Start -->
                        <div class="pb-3">
                            <div class="blog-item">
                                <!-- Carousel Start -->

                                <div class="contenedor-2">

                                  {{-- parte-1 --}}
                                  <div class="images-contenedor-2">
                                      <img src="https://images.pexels.com/photos/1271619/pexels-photo-1271619.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                          alt=""class=" image-cont-2">
                                  </div>
                                  {{-- parte-2 --}}
                                  <div class="images-contenedor-2">
                                      <img src="https://images.pexels.com/photos/709496/pexels-photo-709496.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                          alt=""class=" image-cont-2">
                                  </div>
                                  {{-- parte-3 --}}
                                  <div class="images-contenedor-2">
                                      <img src="https://images.pexels.com/photos/2695232/pexels-photo-2695232.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                          alt=""class=" image-cont-2">
                                  </div>
                                  {{-- parte-4 --}}
                                  <div class="images-contenedor-2">
                                      <img src="https://images.pexels.com/photos/1365425/pexels-photo-1365425.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                          alt=""class=" image-cont-2">
                  
                                  </div>
                                  {{-- parte-5 --}}
                                  {{-- <div class="images-contenedor-2">
                                      <img src="https://images.pexels.com/photos/1271619/pexels-photo-1271619.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                          alt=""class=" image-cont-2">
                                  </div> --}}
                                  {{-- parte-6 --}}
                                  {{-- <div class="images-contenedor-2">
                                      <img src="https://images.pexels.com/photos/709496/pexels-photo-709496.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                          alt=""class=" image-cont-2">
                                  </div> --}}
                                  {{-- parte-7 --}}
                                  {{-- <div class="images-contenedor-2">
                                      <img src="https://images.pexels.com/photos/2695232/pexels-photo-2695232.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                          alt=""class=" image-cont-2">
                                  </div> --}}
                                  {{-- parte-8 --}}
                                  {{-- <div class="images-contenedor-2">
                                      <img src="https://images.pexels.com/photos/1365425/pexels-photo-1365425.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                          alt=""class=" image-cont-2">
                  
                                  </div> --}}
                                  {{-- parte-9 --}}
                                  {{-- <div class="images-contenedor-2">
                                      <img src="https://images.pexels.com/photos/1365425/pexels-photo-1365425.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                          alt=""class=" image-cont-2">
                  
                                  </div> --}}



                                {{-- <div class="container-fluid mb-3">
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
                    width: 730px;">
                                                      <img class="position-absolute w-100 h-100"
                                                          src="https://images.pexels.com/photos/13999909/pexels-photo-13999909.png?auto=compress&cs=tinysrgb&w=600"
                                                          style="object-fit: cover;">
                                                      <div
                                                          class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                                          <div class="p-3" style="max-width: 700px;">
                                                              <h1
                                                                  class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                                                  hotelx </h1>

                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="carousel-item position-relative"
                                                      style="height: 500px;
                  width: 730px;">
                                                      <img class="position-absolute w-100 h-100"
                                                          src="https://images.pexels.com/photos/5088101/pexels-photo-5088101.jpeg?auto=compress&cs=tinysrgb&w=600"
                                                          style="object-fit: cover;">
                                                      <div
                                                          class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                                          <div class="p-3" style="max-width: 700px;">
                                                              <h1
                                                                  class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                                                  hotel-y</h1>

                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="carousel-item position-relative"
                                                      style="height: 500px;
                  width: 730px;">
                                                      <img class="position-absolute w-100 h-100"
                                                          src="https://images.pexels.com/photos/3225531/pexels-photo-3225531.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                              </div> --}}
                                <!-- Carousel End -->

                                </div>

                            </div>
                            <div class="bg-white mb-3" style="padding: 30px;">
                                <div class="d-flex mb-3">
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                    <span class="text-primary px-2">|</span>
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Popayán
                                        Turims</a>
                                </div>
                                <h2 class="mb-3">Las mejores rutas en Popayán</h2>
                                <p>¿Buscas las mejores rutas de senderismo en Popayán? Si te estás preparando para hacer
                                    senderismo, ciclismo, correr o explorar otras actividades al aire libre, AllTrails tiene
                                    3 recorridos panorámicos alrededor de Popayán. Disfruta de mapas de rutas cuidadosamente
                                    seleccionadas, junto con reseñas y fotos de apasionados de la naturaleza como tú.</p>

                            </div>
                        </div>
                        <!-- Blog Detail End -->



                        <!-- Comment Form End -->
                    </div>

                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <!-- Author Bio -->

                        <!-- Search Form -->
                        <div class="mb-5">
                            <div class="bg-white" style="padding: 30px;">
                                <div class="input-group">
                                    <input type="text" class="form-control p-4" placeholder="filtrar">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-primary border-primary text-white"><i
                                                class="fa fa-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Category List -->
                        <div class="mb-5">
                            <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Clacificar por precios</h4>
                            <div class="bg-white" style="padding: 30px;">
                                <ul class="list-inline m-0">
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Rutas de Senderismo en Popayán, Cauca (Colombia)</a>
                                        <span class="badge badge-primary badge-pill">150</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Rutas de Senderismo en Popayán, Cauca (Colombia)</a>
                                        <span class="badge badge-primary badge-pill">131</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Rutas de Senderismo en Popayán, Cauca (Colombia)</a>
                                        <span class="badge badge-primary badge-pill">78</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Rutas de Senderismo en Popayán, Cauca (Colombia)</a>
                                        <span class="badge badge-primary badge-pill">56</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Rutas de Senderismo en Popayán, Cauca (Colombia)</a>
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


                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        {{-- cards de artsanias  --}}

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
        {{-- cards de artsanias   fin --}}


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
