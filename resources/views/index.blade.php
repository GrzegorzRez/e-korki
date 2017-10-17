@extends('layouts/main')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel" style=" background-color: skyblue;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner carousel" >
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
    <span class=""></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class=""></span>
  </a>
</div>


<div class="row" >
  <h1 class="text-center">Jesteś nauczycielem?</h1>
  <div class="col-sm-4">
  	<div class="row text-center"><img width="25%" src="images/heart-icon.svg"/> </div>
  	<div class="row text-center"><p class="lead"><b>Stwórz własny profil, aby Uczniowie mogli kontaktować się z Tobą w sprawie korepetycji!</b></p></div>
  </div>
  <div class="col-sm-4">
  	<div class="row text-center"><img width="25%" src="images/cloud_arrow_up.svg"/> </div>
  	<div class="row text-center"><p class="lead"><b>Korzystaj z wbudowanego kalendarza, aby organizacja Twojej pracy była jeszcze wygodniejsza!</b></p> </div>
  </div>
  <div class="col-sm-4">
  	<div class="row text-center"><img width="25%" src="images/compass.svg"/> </div>
  	<div class="row text-center"><p class ="lead"><b>Udostępniaj pomoce dydaktyczne on-line, aby współpraca z Uczniem była jeszcze efektywniejsza!</b></p></div>
  </div>

 </div>
 
 <div class="row" style=" background-color: skyblue;">
  <h1 class="text-center">Jesteś uczniem?</h1>
  <div class="col-sm-4">
  	<div class="row text-center"><img width="25%" src="images/compass.svg"/> </div>
  	<div class="row text-center"><p class="lead"><b>Przeglądaj oferty korepetytorów z całej Polski i wybierz te,<br> które najbardziej Ci odpowiadają!</b></p> </div>
  </div>
    <div class="col-sm-4">
  	<div class="row text-center"><img width="25%" src="images/description.svg"/> </div>
  	<div class="row text-center"><p class="lead"><b>Używaj prostego i wygodnego menu, aby filtrować oferty według własnych preferencji! </b></div>
  </div>


  <div class="col-sm-4">
  	<div class="row text-center"><img width="25%" src="images/heart-icon.svg"/> </div>
  	<div class="row text-center"><p class ="lead"><b>Po korepetycjach oceń Nauczyciela i prowadzone przez Niego zajęcia, aby dobór właściwych Nauczycieli był jeszcze dokładniejszy! </b></p></div>
  </div>
  @endsection