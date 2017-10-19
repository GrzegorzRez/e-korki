@extends('layouts.main')
@section('content')
<div class="container">

<div class="col-sm-2">
	<form>

  <div class="form-group">
    <label>Przedmiot:</label>
    <input class="form-control" type="text" name="name" value="{{Input::get('name')}}">
  </div>

<div class="form-group">
  <div>
    <label>Kategoria:</label>
  		<select name="category_id" class="form-control">
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

</form>
</div>

<div class="col-sm-8">
	@each('offers.offer',$offers,'offer');
	{{ $offers->links() }}
</div>
</div>	
@endsection