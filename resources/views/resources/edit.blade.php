@extends('layouts/main')
@section('title','Edytuj materiał')
@section('content')
<div class="container text-center">
 <form action="{{  route('resources.update',['resource'=>$resource])  }}" method="POST">
     {{ csrf_field() }}
     {{ method_field('PUT')  }}
  <div class="form-group text-center">
      <input type="text" class="form-control text-center" name="title" value="{{ (old('title')=='') ? $resource->title : old('title') }}">
  </div>
  <div class="form-group">
      <textarea class="form-control" rows="15" name="content">{{ (old('content')=='') ? $resource->content : old('content') }}</textarea>
  </div>

  <button type="submit" class="btn btn-default">Zapisz</button>
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

