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
					        <td>IMIĘ:</td>
					        <td>{{$user->name}}</td> 
					      </tr>
					      <tr>
					        <td>NAZWISKO:</td>
					        <td>{{$user->surname}}</td> 
					      </tr>
					      <tr>
					        <td>EMAIL:</td>
					        <td>{{$user->email}}</td> 
					      </tr>
					      <tr>
					        <td>MIASTO:</td>
					        <td>{{$user->location}}</td> 
					      </tr>
 					 </table>
 					 <button class="btn btn-primary btn-lg">
                        Edytuj Profil
                    </button>
			</div>


</div>

<div class="row border-radius-4" style="background-color:#DBE9DF">
        <div class="col-sm-2"><img src="/images/info.svg" width="100%"/></div>
           
        <div class="col-sm-10">
        	<h2>Kilka słów o mnie...</h2>
      	 		<p> {{$user->description}}</p>
      	</div>
            
 </div>

</div>
           
@endsection