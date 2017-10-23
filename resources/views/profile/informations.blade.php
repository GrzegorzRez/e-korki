@extends('profile.layouts.main')
@section('profile_content')
        <h2>Kilka słów o mnie...</h2>
        <div class="well bg-success">
                <p class="text-info"> {{$user->description}}</p>
        </div>
        <h2>Pozostałe informacje</h2>
        <h4>
                <b>Miejscowość: </b> {{$user->location}}
        </h4>
        <h4>
                <b>E-mail: </b> {{$user->email}}
        </h4>
        <h4>
                <b>Numer telefonu:</b> {{$user->phone}}
        </h4>
@endsection