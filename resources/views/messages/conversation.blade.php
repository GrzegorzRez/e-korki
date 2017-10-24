@extends('layouts.main')
@section('title',$receiveUser->getFullName())
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

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<h2 class="text-center">Udostępnij materiały</h2>
	<select class="form-control" >
		@foreach( $resources as $resource )
			<option value="{{ route('resources.share',['resource'=>$resource,'user'=>$receiveUser]) }}" >{{  $resource->title  }}</option>
		@endforeach
	</select>

	<script>
        $("select").click(function() {
            var open = $(this).data("isopen");
            if(open) {
                window.location.href = $(this).val()
            }
            //set isopen to opposite so next time when use clicked select box
            //it wont trigger this event
            $(this).data("isopen", !open);
        });
	</script>

	@forelse($messages as $message)
		@include('messages.message')
	@empty
		@include('messages.none')
	@endforelse
</div>
@endsection