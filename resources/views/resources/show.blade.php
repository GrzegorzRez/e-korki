@extends('layouts/main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p><h2>{{ $resource->title  }}</h2></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-justify">{{ $resource->content }}</div>
    </div>
</div>
@endsection

