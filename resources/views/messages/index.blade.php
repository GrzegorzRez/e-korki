@extends('layouts.main')
@section('title','Wiadomości')
@section('content')
    <div class="container">
        <h3>Ostatnie wysłane wiadomości</h3><hr>
        @foreach($latestSendMessages as $messages)
            <h4>{{ $messages[0]->receive->getFullName() }}</h4>
            <p>{{ $messages[0]->content }}</p>
            <a href="{{ route('messages.conversation',['receive_user_id'=>$messages[0]->receive->id]) }}">Otwórz konwersację</a>
            <hr>
        @endforeach
        <h3>Ostatnie odebrane wiadomości</h3><hr>
        @foreach($latestReceiveMessages as $messages)
            <h4>{{ $messages[0]->send->getFullName() }}</h4>
            <p>{{ $messages[0]->content }}</p>
            <a href="{{ route('messages.conversation',['receive_user_id'=>$messages[0]->send->id]) }}">Otwórz konwersację</a>
            <hr>
        @endforeach
    </div>
@endsection