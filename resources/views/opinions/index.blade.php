@extends('layouts/main')
@section('content')

@foreach($opinions as $opinion)
    <div class="media">
        <div class="media-body">
            <h4 class="media-heading">{{ $opinion->student->name }} {{ $opinion->student->surname }}<small><i>Wystawiono: {{ $opinion->created_at }}</i></small></h4>
            <p>{{ $opinion->content }}</p>
            <p>Ocena: {{ $opinion->grade }}</p>
        </div>
    </div>
@endforeach



@endsection

