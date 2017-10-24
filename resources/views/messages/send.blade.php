@extends('layouts.main')
@section('title','Wiadomości wysłane')
@section('content')
    <div class="container">
        <div class="btn-group btn-group-justified">
            <a class="btn btn-default btn-lg" role="button" href="{{ route('messages.receive') }}">
                Odebrane
            </a>
            <a class="btn btn-primary btn-lg" role="button" href="{{ route('messages.send') }}">
                Wysłane
            </a>
        </div>
        <h3>Ostatnie wysłane wiadomości</h3><hr>
        @foreach($latestSendMessages as $messages)
            @include( 'messages.littleMessage' , ['user'=>$messages[0]->receive, 'message'=>$messages[0]] )
        @endforeach
    </div>
@endsection