@extends('layouts/main')
@section('content')
<div class="container">
<div class="row text-center">
    <h2>PROFIL CIOŁKA</h2>
</div>

<div class="row">

    <!-- left col. -->
            <div class="col-sm-6">
            	<img src="/images/zdjecie.jpg" class="img-circle"/>
            </div>

			<div class="col-sm-6">
<table class="table table-striped">
      <tr>
        <td>IMIĘ:</td>
        <td>Roman</td> <!--{{$user->first_name}} -->
      </tr>
      <tr>
        <td>NAZWISKO:</td>
        <td>Świeżak</td> <!--{{$user->last_name}} -->
      </tr>
      <tr>
        <td>EMAIL:</td>
        <td>123@user.pl</td> <!--{{$user->email}} -->
      </tr>
      <tr>
        <td>MIASTO:</td>
        <td>Bydgoszcz</td> <!--{{$user->city}} -->
      </tr>
  </table>
</div>
</div>
</div>
           
@endsection
