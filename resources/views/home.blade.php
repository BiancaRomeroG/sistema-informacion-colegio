@extends('layouts.home_plantilla')

@section('navigation')

<div class="row justify-content-center">
  <div class="col-8 my-4">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img\slide1.jpg" class="d-block w-100" alt="slide1">
        </div>
        <div class="carousel-item">
          <img src="img\slide4.jpg" class="d-block w-100" alt="slide4">
        </div>
        <div class="carousel-item">
          <img src="img\slide3.jpg" class="d-block w-100" alt="slide3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
<div class="text-center m-3 px-5">
  <div class="mb-5 px-5 mx-4">
    <h1 class="text-danger fw-bold">COLEGIO CRISTO REY</h1>
    <p>Es una institución líder en brindar un servicio educativo integral de calidad y excelencia en Santa Cruz,
      formando estudiantes transformadores de su realidad personal, social y espiritual; con personal
      debidamente preparado y comprometido con el desarrollo institucional, local y regional, practicando un
      modelo de organización de excelencia, dentro de un clima institucional basado en la práctica de valores y
      con infraestructura y equipos modernos y adecuados para motivar una educación de alto nivel y rendimiento
      académico.</p>
  </div>
  <div class="row justify-content-around my-4">
    <div class="col-5">
      <div class="container">
        <img src="img\target.png" class="text-center" width="120" height="120" alt="mision">
      </div>
      <h3 class="text-danger fw-bold my-2">MISIÓN</h3>
      <p>“Evangelizar, Discipular y Enviar” (Mat.28:19-20) Nuestra misión es formar ciudadanos íntegros y
        solidarios capacitados para construir una mejor sociedad en beneficio de la Patria y de la humanidad
        guiada por el mensaje transformador del Señor Jesucristo.</p>
    </div>
    <div class="col-5">
      <div class="container">
        <img src="img\search.png" class="text-center " width="120" height="120" alt="vision">
      </div>
      <i class="fas fa-home"></i>
      <h3 class="text-danger fw-bold my-2">VISIÓN</h3>
      <p>“Educando para la eternidad” (Sal.139:23-24) Ser la institución de mayor prestigio y credibilidad a
        nivel nacional y regional en la prestación de servicios EDUCATIVOS en las áreas académica, familiar,
        espiritual y social.</p>
    </div>
  </div>
</div>

@endsection

