@extends('layouts/main')
@section('content')

@foreach($opinions as $opinion)
    <div class="media">
        <div class="media-body">
            <h4 class="media-heading">{{ $opinion->student->name }} <small><i>Wystawiono: {{ $opinion->created_at }}</i></small></h4>
            <p>{{ $opinion->content }}</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
            </p>
            <i class="glyphicon glyphicon-star"></i>
        </div>
    </div>
@endforeach



@endsection

