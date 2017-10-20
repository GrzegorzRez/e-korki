@extends('layouts/main')
@section('content')
<div class="container text-center">
 <form>
  <div class="form-group text-center">
      <input type="text" class="form-control text-center" placeholder="Tytuł" id="title">
  </div>
  <div class="form-group">
      <textarea class="form-control" rows="5" id="comment"></textarea>
  </div>

  <button type="submit" class="btn btn-default">Dodaj materiał</button>
</form> 
</div>
@endsection

