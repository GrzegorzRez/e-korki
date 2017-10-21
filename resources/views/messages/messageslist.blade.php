@extends('layouts.main')
@section('content')
@foreach( $messages as $message )
	@if($message->send_id == Auth::id())

		<p>{{ $message->content }}</p>
	@elseif($message->receive_id == Auth::id())
		<p>{{ $message->content}}
	@endif
@endforeach
@endsection

