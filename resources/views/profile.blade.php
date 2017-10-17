@extends('layouts/main')

@section('title',$user->getFullName())

@section('style')
	<link rel="stylesheet" href="/css/profile.css">
@endsection

@section('content')
<div class="container">
<div class="row text-center">
    <h2><b>PROFIL UŻYTKOWNIKA</b></h2>
</div>

<div class="row">

          	<div class="col-sm-6 profile_picture_div">
            	<img src="/uploads/avatars/{{ $user->avatar }}" class="img-rounded profile_picture img-responsive"/>
            </div>

			<div class="col-sm-6 ">
				 <div class="contact">
            		<h1 class="text-center">DANE KONTAKTOWE</h1>
           		 </div>

				<div  class="note_board">
					<table class="table">
					      <tr>
					        <td><b>IMIĘ:</b></td>
					        <td>{{$user->name}}</td> 
					      </tr>
					      <tr>
					        <td><b>NAZWISKO:</b></td>
					        <td>{{$user->surname}}</td> 
					      </tr>
					      <tr>
					        <td><b>EMAIL:</b></td>
					        <td>{{$user->email}}</td> 
					      </tr>
					      <tr>
					        <td><b>MIASTO:</b></td>
					        <td>{{$user->location}}</td> 
					      </tr>
					      <tr>
					        <td><b>TELEFON:</b></td>
					        <td>OPCJONALNIE</td> 
					      </tr>
					</table>
				</div>

				<div>
 					@if(Auth::id()==$user->id)
					<a class="btn btn-primary btn-lg" role="button" href="{{ route('profile.edit') }}">
                        Edytuj profil
					</a>
					@endif
				</div>

			</div>
</div>

<div class="row profile_description">
        <div class="col-sm-2"><img src="/images/info.png" class="img-responsive"/></div>
           
        <div class="col-sm-10">
        	<h2>Kilka słów o mnie...</h2>
      	 		<p> {{$user->description}}</p>
      	</div>
 </div>


<div>
	<ul class="nav nav-tabs nav-justified tabs_css" role="tablist">
	  	<li><a href="#oferty_tab" role="tab" data-toggle="tab">OFERTY</a></li>
		<li><a href="#opinie_tab" role="tab" data-toggle="tab">OPINIE</a></li>
	</ul>
</div>
<div class="tab-content">
	<div class="tab-pane" id="oferty_tab">
		
	OFERTY
	
	</div>

	<div class="tab-pane" id="opinie_tab">
		<div class="row">
			<div class="col-md-12">
				<h2>Twoja opinia o {{$user->getFullName()}}</h2>
			</div>
			<div class="col-md-6">
				@include('opinions.form',['teacher' => $user , 'authOpinion' => $authOpinion])
			</div>
			<div class="col-md-6">
				@include('opinions.statistics',['gradesCount' => $gradesCount])
			</div>
		</div>
		<h2>Opinie innych użytkowników:</h2>
		@each('opinions.opinion',$opinions,'opinion');
	</div>
</div>

</div>
@endsection