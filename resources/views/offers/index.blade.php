@extends('layouts.main')
@section('content')
<div>
	<form action="{{URL::current()}}">
		<div>
		Przedmiot: <input type="text" name="name" value="{{Input::get('name')}}">
		<div>
		<div>
		<label for="">CENA</label>
		Cena min: <input type="number" name="price_min" value="{{Input::get('price_min')}}">
		Cena max: <input type="number" name="price_max" value="{{Input::get('price_max')}}">
		<div>
		<div>
		Lokalizacja: <input type="text" name="location" value="{{Input::get('location')}}">
		<div>
		<div>
			<label for="">Tryb korepetycji</label>
			Online<input type="checkbox" name="online" {{ Input::get('online')=='on' ? 'checked' : '' }}>
			Miejsce zamieszkania nauczyciela<input type="checkbox" name="teacher_home" {{ Input::get('teacher_home')=='on' ? 'checked' : '' }}>
			Miejsce zamieszkania ucznia<input type="checkbox" name="student_home" {{ Input::get('student_home')=='on' ? 'checked' : '' }}>
		<div>
		<input type="submit" value="wyszukaj">
	</form>
</div>

<div class="container">
	@each('offers.offer',$offers,'offer');
	{{ $offers->links() }}
</div>	
@endsection