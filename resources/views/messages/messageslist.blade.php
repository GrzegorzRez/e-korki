@foreach( $messages as $message )
	<ul>
	<li>{{ $message->content }}</li>
	</ul>
@endforeach
