@extends('layouts/main')
@section('content')
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner carousel">
    <div class="item active ">
      <h2 class="carousel-caption" >Tekst</h2>
      <img class="img-rounded center-block"  src="images/main_page_chalkboard_slider.jpg" alt="Tablica">
    </div>

    <div class="item">
      <h2 class="carousel-caption" >Tekst</h2>
      <img class="img-rounded center-block" src="images/main_page_reading_book_slide.jpg" alt="Czyta">
    </div>

    <div class="item">
      <h2 class="carousel-caption" >Tekst</h2>
      <img class="img-rounded center-block" src="images/main_page_slider_photo.jpg" alt="apple">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="row">
  <div class="col-sm-4">
  	<div class="row text-center"><img width="30%" src="images/cloud_arrow_up.svg"/> </div>
  	<div class="row text-center">Udostępnianie materiałów dydaktycznych </div>
  </div>
  <div class="col-sm-4">
  	<div class="row text-center"><img width="30%" src="images/compass.svg"/> </div>
  	<div class="row text-center">Mnóstwo ofert z całej polski</div>
  </div>
    <div class="col-sm-4">
  	<div class="row text-center"><img width="30%" src="images/heart-icon.svg"/> </div>
  	<div class="row text-center">Korzystaj z usług i oceniaj korepetytorów </div>
  </div>

@endsection