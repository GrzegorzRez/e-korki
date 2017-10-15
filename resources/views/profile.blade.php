@extends('layouts/main')
@section('content')
<div class="container">
<div class="row text-center">
    <h2><b>PROFIL UŻYTKOWNIKA</b></h2>
</div>

<div class="row">

          	<div class="col-sm-6 profile_picture_div">
            	<img src="/images/classic.png" class="img-rounded profile_picture img-responsive"/>
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

					<a class="btn btn-lg" role="button" href="{{  route('opinions.add',['id'=>$user->id]) }}">
						Wystaw opinię
					</a>
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
        Średnia ocen: {{ $averageScope  }}
		@foreach($opinions as $opinion)
			<div class="media">
				<div class="media-body">
					<div>
						<h4 class="media-heading left">{{ $opinion->student->name }} {{ $opinion->student->surname }}<small class="right"><i>Wystawiono: {{ $opinion->created_at }}</i></small></h4>
					</div>
					<p>{{ $opinion->content }}</p>
					<p>Ocena: {{ $opinion->grade }}</p>
					@if( $opinion->student->id == Auth::id() )
					<a class="btn btn-sm" role="button" href="" onclick="sendDeleteOpinionRequest({{  $opinion->id  }})">
						Usuń
					</a>
					@endif
				</div>
			</div>
		@endforeach
	</div>
</div>

</div>



	<script>

		function sendDeleteOpinionRequest(id) {
            $.ajax({
                url: '{{ route('opinions.delete',[ '$opinion'=> '' ]) }}/'+id,
                type: 'DELETE',
                data: { _token : '{{ csrf_token() }}' }
            });
            location.reload();
        }

	</script>
@endsection