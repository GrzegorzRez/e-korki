@extends('layouts/main')
@section('content')
<form action="upload" id="upload" enctype="multipart/form-data">
	<input type="file" name="file[]" multiple>
	<input type="submit">
</form>

<script>
	var form = document.getElementById('upload');
	var request = new XMLHttpRequest();

	form.addEventListener('submit', function(e)){
		e.PreventDefault();
		var formdata = new FormData(form);
		request.open('post','/upload');
		request.send(formdata);
		
	}
</script>