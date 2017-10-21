@foreach( $messages as $message )
	<ul>
	@if($message->send_id == Auth::id())	
		<li color="red">{{ $message->content }}</li>
	@else
		<li><b>{{ $message->content}}</b></li>
	@endif
	</ul>
@endforeach

