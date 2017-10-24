@extends('layouts/main')
@section('title','Dodaj materiał')
@section('content')
<div class="container text-center">
 <form action="{{  route('resources.store')  }}" method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
  <div class="form-group text-center">
      <input type="text" class="form-control text-center" placeholder="Tytuł" name="title" value="{{ old('title') }}">
  </div>
  <div class="form-group">
      <textarea class="form-control" rows="15" name="content" id="content">{{ old('content') }}</textarea>
  </div>
  <input type="file" name="file" id="file" >
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
<script src="/js/enableTab.js"></script>
<script>
    enableTab('content');
</script>
@endsection

