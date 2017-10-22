@extends('layouts.main')
@section('title','Przeglądaj oferty')
@section('content')
<div class="container">

  <form>
  <div class="col-xs-12">
    <div class="form-group input-group">
      <input type="text" class="form-control" name="name" value="{{Input::get('name')}}" placeholder="Wpisz czego szukasz...">
      <span class="input-group-btn">
        <input type="submit" class="btn btn-default" type="button" value="Szukaj">
      </span>
    </div>
  </div>
<div class="col-sm-2">

<div class="form-group">
  <div>
    <label>Kategoria:</label>
  		<select name="category_id" class="form-control">
          <option value="">Wszystkie</option>
     	@foreach( $categories as $category )
     		<option value="{{  $category->id  }}" {{ $category->id == Input::get('category_id') ? 'selected' : '' }}>{{  $category->name  }}</option>
     	@endforeach
  		</select>
  </div>
</div>

<div class="form-group">
<label>Cena:</label>
<div class="row">
  <div class="col-xs-6">
    <input placeholder="od" class="form-control" type="number" name="price_min" value="{{Input::get('price_min')}}">
    </div>
     <div class="col-xs-6">
    <input placeholder="do" class="form-control" type="number" name="price_max" value="{{Input::get('price_max')}}">
  </div>
</div>
</div>
  <div class="form-group">
    <label>Lokalizacja:</label>
    <input class="form-control" type="text" name="location" value="{{Input::get('location')}}">
  </div>

  	<label>Tryb korepetycji:</label>
  <div class="checkbox">
    <label><input type="checkbox" name="online" {{ Input::get('online')=='on' ? 'checked' : '' }}> Online</label>
    <label><input type="checkbox" name="teacher_home" {{ Input::get('teacher_home')=='on' ? 'checked' : '' }}> Miejsce zamieszkania nauczyciela</label>
    <label><input type="checkbox" name="student_home" {{ Input::get('student_home')=='on' ? 'checked' : '' }}> Miejsce zamieszkania ucznia</label>
  </div>

  <input class="form-control btn-primary" type="submit" value="wyszukaj">


</div>
  </form>

<div class="col-sm-10">
	@each('offers.offer',$offers,'offer','offers.none');
	{{ $offers->links() }}
</div>
</div>	
@endsection