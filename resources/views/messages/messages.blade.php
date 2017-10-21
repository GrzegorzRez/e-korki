@extends('layouts.main')

@section('content')
	<div class="row">
		<div class="review-block-content">
			@foreach($messages as $message)
				@if($message->send_id == Auth::id() && $message->receive_id == $user->id)	
					<li><b>{{ $message->content }}</b></li>
				@elseif($message->send_id == $user->id && $message->receive_id == Auth::id())
					<li>{{ $message->content}}</li>
				@endif
			@endforeach
		</div> 
	</div>
@endsection