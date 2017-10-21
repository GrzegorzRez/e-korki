@extends('layouts.main')

@section('content')
<div class="container">
	<h2 class="text-center">Konwersacja z {{  $receiveUser->getFullName()  }}</h2>
    <form method="POST" action="{{ route('messages.store') }}">
		{{ csrf_field() }}
		<input type="hidden" name="receive_id" value="{{$receiveUser->id}}">
		<div class="form-group">
			<label for="content">Treść wiadomości:</label>
			<textarea class="form-control" rows="5" id="content" name="content"></textarea>
		</div>
		<button type="submit" class="btn btn-default">Wyślij</button>
    </form>
	@forelse($messages as $message)
		@include('messages.message')
	@empty
		@include('messages.none')
	@endforelse
</div>
@endsection