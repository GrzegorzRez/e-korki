@extends('layouts/main')
@section('content')
	@foreach($offers as $offer)
		<h4>{{ $offer->user->name }} </h4>
		<h3>{{ $offer->name }} </h3>



	@endforeach
@endsection