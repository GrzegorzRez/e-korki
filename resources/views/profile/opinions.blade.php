@extends('profile.layouts.main')
@section('profile_content')
    <div class="row">
        @if(Auth::id()!=$user->id)
            <div class="col-md-12">
                <h2>Twoja opinia</h2>
            </div>
            <div class="col-md-6">
                @include('opinions.form',['teacher' => $user , 'authOpinion' => $authOpinion])
            </div>
        @endif
        <div class="col-md-6">
            @include('opinions.statistics',['gradesCount' => $gradesCount])
        </div>
    </div>
    <h2>Opinie innych użytkowników:</h2>
    @push('styles')
        <link rel="stylesheet" href="/css/opinion.css">
    @endpush
    @each('opinions.opinion',$opinions,'opinion');
@endsection