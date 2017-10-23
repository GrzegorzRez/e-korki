@extends('profile.layouts.main')
@section('profile_content')
        @foreach($offers as $offer)
                @include('offers.offer',['offer'=>$offer])
                @if(Auth::id()==$user->id)
                        @include('offers.editBar',['offer'=>$offer])
                @endif
        @endforeach
@endsection