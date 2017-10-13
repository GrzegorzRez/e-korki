@extends('layouts/main')

@section('content')
	<div class="row text-center">
    	<h2><b>EDYCJA PROFILU UŻYTKOWNIKA</b></h2>
	</div>

	<div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('profile.store')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Imię</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="surname" class="col-md-4 control-label">Nazwisko</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{$user->surname}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{$user->email}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="location" class="col-md-4 control-label">Miasto</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="{{$user->location}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Opis</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description">{{$user->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Zatwierdź zmiany
                                </button>
                            </div>
                        </div>
                    </form>
@endsection