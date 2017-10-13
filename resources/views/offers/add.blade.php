@extends('layouts/main')

@section('content')
    <h1>Dodaj ofertę</h1>
	<div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('offers.store')}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nazwa</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Opis</label>

                            <div class="col-md-6">
                                <textarea id="description" name="description" class="form-control" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price_per_hour" class="col-md-4 control-label">Cena za Godzinę</label>

                            <div class="col-md-6">
                                <input id="price_per_hour" type="text" class="form-control" name="price_per_hour" value="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Dodaj Ofertę
                                </button>
                            </div>
                        </div>
                    </form>
@endsection