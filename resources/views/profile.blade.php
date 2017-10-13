@extends('layouts/main')
@section('content')
<div class="container">
<div class="row text-center">
    <h2><b>PROFIL UŻYTKOWNIKA</b></h2>
</div>

<div class="row">

          	<div class="col-sm-6">
            	<img src="/images/zdjecie.jpg" class="img-circle"/>
            </div>

			<div class="col-sm-6">
					<table class="table table-striped">
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
 					 </table>
 					 <button class="btn btn-primary btn-lg">
                        Edytuj Profil
                    </button>
					<button class="btn btn-lg">
						Wystaw opinię
					</button>
			</div>


</div>

<div class="row profile_description" style="background-color:#DBE9DF">
        <div class="col-sm-2"><img src="/images/info.svg" width="100%"/></div>
           
        <div class="col-sm-10">
        	<h2>Kilka słów o mnie...</h2>
      	 		<p> {{$user->description}}</p>
      	</div>
 </div>


<div>
<ul class="nav nav-tabs nav-justified" role="tablist">
  <li><a href="#1kartajust" role="tab" data-toggle="tab">OPINIE</a></li>
  <li><a href="#2kartajust" role="tab" data-toggle="tab">OFERTY</a></li>
</ul>
</div>
<div class="tab-content">
  <div class="tab-pane" id="1kartajust">Zawartość pierwszej karty</div>
  <div class="tab-pane" id="2kartajust">Zawartość drugiej karty</div>
</div>

</div>
@endsection