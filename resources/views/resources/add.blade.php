@extends('layouts/main')
@section('title','Dodaj materiał')
@section('content')
<div class="container">
 <form action="{{  route('resources.store')  }}" method="POST" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="form-group">
         <label for="tags" class="control-label">Tytuł</label>
         <input type="text" class="form-control" name="title" value="{{ old('title') }}">
     </div>
      <div class="form-group">
          <label for="tags" class="control-label">Zawartość</label>
          <textarea class="form-control" rows="15" name="content" id="content">{{ old('content') }}</textarea>
      </div>
     <div class="form-group">
         <label for="tags" class="control-label">Zdjęcia</label>
         <input type="file" name="attachment" id="file" accept="image/*" />
     </div>
    <button type="submit" class="btn btn-primary">Dodaj materiał</button>
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

