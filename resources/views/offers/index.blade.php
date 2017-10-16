@extends('layouts.main')
@section('content')
<div class="container">
	@foreach($offers as $offer)
	<div class="list-group-item">
		<h4><a href="{{ route('profile.show',['id'=>$offer->user->id]) }}">{{ $offer->user->name }}</a> </h4>
		<h3>{{ $offer->name }} </h3>
		<h3>{{ $offer->price_per_hour }}</h3>
		<h3>{{ $offer->description }}</h3>
	</div>
	@endforeach
</div>	
@endsection