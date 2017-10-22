@extends('layouts/main')
@section('title','Dodaj materiał')
@section('content')
<div class="container text-center">
 <form action="{{  route('resources.store')  }}" method="POST">
     {{ csrf_field() }}
  <div class="form-group text-center">
      <input type="text" class="form-control text-center" placeholder="Tytuł" name="title" value="{{ old('title') }}">
  </div>
  <div class="form-group">
      <textarea class="form-control" rows="15" name="content">{{ old('content') }}</textarea>
  </div>

  <button type="submit" class="btn btn-default">Dodaj materiał</button>
</form> 
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection

