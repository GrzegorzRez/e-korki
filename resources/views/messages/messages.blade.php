@extends('layouts.main')

@section('content')
<div class="container">
	<div>
    <form method="POST" action="{{ route('message.send') }}">
      <div class="form-group">
        <label for="comment">Treść wiadomości:</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
        <input type="hidden" name="recieve_id" value="{{$user->id}}">
        <button type="submit" class="btn btn-default">Submit</button>
      </div> 
    </form>
		<div>
      @if(isset($messages))
			@foreach($messages as $message)
				@if($message->send_id == Auth::id() && $message->receive_id == $user->id)
				<div class="row">
					<div class="panel panel-primary col-xs-7">
      					<div class="panel-heading ">
      						{{Auth::user()->getFullName()}}
      					</div>
      					<div class="panel-body">
      						{{ $message->content }}
      					</div>
      					<small>{{$message->created_at}}</small>
    				</div>
				</div>
				@elseif($message->send_id == $user->id && $message->receive_id == Auth::id())
				<div class="row">
					<div class="col-xs-5"></div>
					<div class="panel panel-danger col-xs-7">
      					<div class="panel-heading text-right">
      						{{$user->getFullName()}}
      					</div>
      					<div class="panel-body text-right">
      						{{ $message->content }}
      					</div>
      					<small>{{$message->created_at}}</small>
    				</div>
    			</div>
				@endif
			@endforeach
        <h3 class="text-center">Brak Wiadomości</h3>
      @endif

		</div> 
	</div>
</div>

@endsection