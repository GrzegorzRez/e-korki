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

 					@if(Auth::id()==$user->id)
					<a class="btn btn-primary btn-lg" role="button" href="{{ route('profile.edit') }}">
                        Edytuj profil
					</a>
                    @endif

					<a class="btn btn-lg" role="button" href="{{  route('opinions.add',['id'=>$user->id]) }}">
						Wystaw opinię
					</a>

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
	  	<li><a href="#oferty_tab" role="tab" data-toggle="tab">OFERTY</a></li>
		<li><a href="#opinie_tab" role="tab" data-toggle="tab">OPINIE</a></li>
	</ul>
</div>
<div class="tab-content">
	<div class="tab-pane" id="oferty_tab">
		OFERTY UŻYTKOWNIKA
	</div>
	<div class="tab-pane" id="opinie_tab">
		@foreach($opinions as $opinion)
			<div class="media">
				<div class="media-body">
					<h4 class="media-heading">{{ $opinion->student->name }} {{ $opinion->student->surname }}<small><i>Wystawiono: {{ $opinion->created_at }}</i></small></h4>
					<p>{{ $opinion->content }}</p>
					<p>Ocena: {{ $opinion->grade }}</p>
				</div>
			</div>
		@endforeach
	</div>
</div>

</div>
@endsection