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
      <div class="carousel-caption" style="position:absolute;top: 5%; transform: translateY(-5%);">
        <div class ="col-xs-1"></div>
         <div class ="col-xs-10">
        <span style="text-shadow: 2px 2px 4px #000000;"><h3><i>"Nie wstyd nie wiedzieć, lecz wstyd nie pragnąć swojej wiedzy uzupełnić."</i></h3>
        <h5>Feliks Chwalibóg</h5></span>
          </div>
      </div>
      <img class="img-rounded center-block"  src="images/main_page/slider/math.jpg" alt="Tablica">
    </div>

    <div class="item">
      <div class="carousel-caption">
        <span style="text-shadow: 2px 2px 4px #000000"><h2><i>"Najmądrzejszy jest, który wie czego nie wie."</i></h2>
        <h5>Sokrates</h5></span>
      </div>
      <img class="img-rounded center-block" src="images/main_page/slider/reading_book.jpg" alt="Czyta">
    </div>

    <div class="item">
      <div class="carousel-caption">
        <div class ="col-xs-5"></div>
        <div class="col-xs-6">
          <span style="text-shadow: 2px 2px 4px #000000"><h3><i>"Sama wiedza nie wystarczy, trzeba jeszcze umieć ją stosować."</i></h3>
          <h5>Johann Wolfgang Goethe</h5></span>
        </div>
        <div class="col-xs-1"></div>
      </div>
      <img class="img-rounded center-block" src="images/main_page/slider/apple_on_books.jpg" alt="apple">
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
    <div class="row">
  	<div class="col-lg-12 text-center"><img width="25%" src="images/heart-icon.svg"/> </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center"><p class="lead"><b>Stwórz własny profil, aby Uczniowie mogli kontaktować się z Tobą w sprawie korepetycji!</b></p></div>
    </div>
  </div>
  
  <div class="col-sm-4">
    <div class="row">
  	<div class="col-lg-12 text-center"><img width="25%" src="images/cloud_arrow_up.svg"/> </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center"><p class="lead"><b>Korzystaj z wbudowanego kalendarza, aby organizacja Twojej pracy była jeszcze wygodniejsza!</b></p></div>
    </div>
  </div>
  
  <div class="col-sm-4">
    <div class="row">
  	<div class="col-lg-12 text-center"><img width="25%" src="images/compass.svg"/> </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center"><p class="lead"><b>Udostępniaj pomoce dydaktyczne on-line, aby współpraca z Uczniem była jeszcze efektywniejsza!</b></p></div>
    </div>
  </div>
 </div>
 
 <div class="row" style=" background-color: skyblue;">
  <h1 class="text-center">Jesteś uczniem?</h1>
  
    <div class="col-sm-4">
    <div class="row">
  	<div class="col-lg-12 text-center"><img width="25%" src="images/compass.svg"/> </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center"><p class="lead"><b>Przeglądaj oferty korepetytorów z całej Polski i wybierz te,<br> które najbardziej Ci odpowiadają!</b></p></div>
    </div>
  </div>
  
    <div class="col-sm-4">
    <div class="row">
  	<div class="col-lg-12 text-center"><img width="25%" src="images/description.svg"/> </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center"><p class="lead"><b>Używaj prostego i wygodnego menu, aby filtrować oferty według własnych preferencji!</b></p></div>
    </div>
  </div>
  
    <div class="col-sm-4">
    <div class="row">
  	<div class="col-lg-12 text-center"><img width="25%" src="images/heart-icon.svg"/> </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center"><p class="lead"><b>Po korepetycjach oceń Nauczyciela i prowadzone przez Niego zajęcia, aby dobór właściwych Nauczycieli był jeszcze dokładniejszy!</b></p></div>
    </div>
  </div>
 </div>
  @endsection