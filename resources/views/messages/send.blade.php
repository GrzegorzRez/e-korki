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
            <h4>{{ $messages[0]->receive->getFullName() }}</h4>
            <p>{{ $messages[0]->content }}</p>
            <a href="{{ route('messages.conversation',['receive_user_id'=>$messages[0]->receive->id]) }}">Otwórz konwersację</a>
            <hr>
        @endforeach
    </div>
@endsection