@extends('layouts.main')
@section('content')
	@foreach($offers as $offer)
	<div class="list-group-item">
		<h4>{{ $offer->user->name }} </h4>
		<h3>{{ $offer->name }} </h3>
		<h3>{{ $offer->price_per_hour }}</h3>
		<h3>{{ $offer->description }}</h3>
	</div>
	@endforeach
@endsection