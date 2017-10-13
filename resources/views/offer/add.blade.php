@extends('layouts/main')

@section('content')
	<div class="panel-body">
                    <form class="form-horizontal" method="POST" >
                        <div class="form-group">
                            <label for="offer_name" class="col-md-4 control-label">Nazwa Oferty</label>

                            <div class="col-md-6">
                                <input id="offer_name" type="text" class="form-control" name="offer_name" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Opis oferty</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="" required>
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