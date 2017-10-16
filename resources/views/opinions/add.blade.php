@extends('layouts/main')
@section('content')

    <h1 class="text-center">Dodaj opinie o {{ $teacher->name  }} {{ $teacher->surname  }}</h1>

    @include('opinions.form')

@endsection

