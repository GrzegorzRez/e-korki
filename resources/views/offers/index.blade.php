@extends('layouts.main')
@section('content')
<div>
	<form action="{{URL::current()}}">
		<div>
			Przedmiot: <input type="text" name="name" value="{{Input::get('name')}}">
		<div>
		<div>
		<label for="">CENA</label>
		Cena min: <input type="number" name="price_min" value="{{Input::get('price_min')}}">
		Cena max: <input type="number" name="price_max" value="{{Input::get('price_max')}}">
		<div>
		<div>
		Lokalizacja: <input type="text" name="location"> <!--chyba warto? -->
		<div>
		<div>
			<label for="">Tryb korepetycji</label>
			Online<input type="checkbox" name="online">
			Face-to-Face<input type="checkbox" name="face">
		<div>
		<input type="submit" value="wyszukaj">
	</form>
</div>

<div class="container">
	@foreach($offers as $offer)
	<div class="list-group-item">
		<h4><a href="{{ route('profile.show',['id'=>$offer->user->id]) }}">{{ $offer->user->name }}</a> </h4>
		<h3>{{ $offer->name }} </h3>
		<h3>{{ $offer->price_per_hour }}</h3>
		<h3>{{ $offer->description }}</h3>
		<h4><b>Lokalizacja: </b>{{ $offer->user->location}}</h3>
	</div>
	@endforeach
	{{ $offers->links() }}
</div>	
@endsection