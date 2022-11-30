@extends('layouts.app')
@section('content')

  <h1 style="color: rgb(185, 72, 146); font-size: 60px; text-align: center;"> MaracBookWorms </h1>
  <h2 style="text-align: center"> Proyecto Final - Programación Tecnologías Web </h2>
  <br>
  <h3>¡Servicio de prestamo de libros!</h3>
  <ul>
    <li> Gran variedad de generos literarios</li>
    <li> Agenda la entrega puerta a puerta a nivel nacional - Domicilios </li>
    <li> MaracBookWorms</li>
  </ul>
  <br>

  <main>

   <!-- Carrusel de Imagenes -->
    <div class="container text-center">
      <div class="row">
        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="5000">
           <!-- Indicadores -->
          <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
            <li data-target="#carouselExample" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="storage/imgs/PORTADAS E INFO GNR..png" alt="Inspirado en Marac" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
              <img src="storage/imgs/QUE SOMOS.png" alt="Que somos"class="d-block w-100"/>
              <div class="carousel-caption d-none d-md-block">
                <h5>¿Que somos?</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/storage/imgs/2.png" alt="Nombre Inspo"class="d-block w-100"/>
              <div class="carousel-caption d-none d-md-block">
                <h5>Inspiración nombres</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('storage/imgs/3.png')}}" alt="Bookworm"class="d-block w-100"/>
              <div class="carousel-caption d-none d-md-block">
                <h5>¿Qué significa Bookworm?</h5>
              </div>
            </div>
          </div>
           <!-- Flechas para moverse -->
          <a href="#carouselExample" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </a>
          <a href="#carouselExample" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </a>

        </div>
      </div>

      <br>
    
     <div class="container text-center">
     <a href="{{ route('producto') }}">
         <button type="submit" class="btn btn-danger">Productos</button>
 </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  




















            <!-- Laravel links -->
            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">

                        
                            <!-- <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg> -->

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg> -->

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <br>
<div class="p-3 mb-2 text-black" style="background-color: rgb(207, 142, 177)">
  <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
  <p style="text-align: center">Libreria MARAC - Powered by Andrea & Jose Miguel2022 &copy; </p>
 </div>
</div>
@endsection
