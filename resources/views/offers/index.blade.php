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
		Lokalizacja: <input type="text" name="location" value="{{Input::get('location')}}"> <!--chyba warto? -->
		<div>
		<div>
			<label for="">Tryb korepetycji</label>
			Online<input type="checkbox" name="online">
			Miejsce zamieszkania nauczyciela<input type="checkbox" name="teacher-home">
			Miejsce zamieszkania ucznia<input type="checkbox" name="student-home">
		<div>
		<input type="submit" value="wyszukaj">
	</form>
</div>

<div class="container">
	@each('offers.offer',$offers,'offer');
	{{ $offers->links() }}
</div>	
@endsection