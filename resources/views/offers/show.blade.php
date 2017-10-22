@extends('layouts/main')
@section('title',$offer->name)
@section('content')
<div class="container">

    <div class="col-lg-8 col-md-8 col-sm-8">

        <h2>{{ $offer->name }}</h2>
        <p><h4>{{ $offer->location }}</h4></p>
        <p>{{ $offer->description }}</p>
        @if( $offer->online )
            <span class="badge badge-pill badge-success">On-line</span>
        @endif
        @if( $offer->teacher_home )
            <span class="badge badge-pill badge-success">U nauczyciela</span>
        @endif
        @if( $offer->student_home )
            <span class="badge badge-pill badge-success">W domu ucznia</span>
        @endif
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 text-center">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <img src="{{ $offer->user->getAvatarHref() }}" class="img-rounded profile_picture img-responsive"/>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
            <h3>{{ $offer->user->getFullName() }}</h3>
            <p><h5>{{ $offer->price_per_hour }} zł / 60 min</h5></p>
        </div>
        <div class="row">
            <div class="btn-group-vertical">
                <a href="{{ $offer->user->getProfileHref() }}" class="btn btn-primary" role="button">Zobacz profil</a>
                <a href="{{ route('messages.conversation',['receive_user_id'=>$offer->user->id]) }}" class="btn btn-primary" role="button">Wyślij wiadomość</a>
                <a href="#" id="numberPhone" class="btn btn-primary" role="button" onclick="showNumberPhone();">Numer telefonu</a>

            </div>
        </div>
    </div>
    <script>
    function showNumberPhone()
    {
        document.getElementById('numberPhone').innerHTML = '{{ $offer->user->phone }}';
    }
    </script>
</div>

@endsection