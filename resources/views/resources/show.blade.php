@extends('layouts/main')
@section('title',$resource->title)
@push('styles')
    <link rel="stylesheet" href="/css/resource.css">
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p><h2>{{ $resource->title  }}</h2></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-justify" id="resource_content">{{ $resource->content }}</div>
    </div>
</div>
@endsection