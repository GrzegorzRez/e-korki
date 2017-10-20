@extends('layouts/main')

@section('content')

<div class="container">
    
    <div class="col-lg-8 col-md-8 col-sm-8">
        
        <h2>{{ $offer->name }}</h2>
        <p><h4>{{ $offer->location }}</h4></p>
        <p>{{ $offer->description }}</p>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-4 text-center">
        <h4>{{ $offer->user->getFullName() }}</h4>
        <div class="btn-group-vertical">
         <button type="button" class="btn btn-primary">numer telefonu</button>
         <button type="button" class="btn btn-primary">napisz wiadomosc</button>
       </div> 
    </div>    
    
</div>

@endsection