@extends('layouts/main')

@section('content')
    <h1 class="text-center">Dodaj ofertę</h1>
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
                                <input id="price_per_hour" type="number" class="form-control" name="price_per_hour" value="{{  old('price_per_hour')  }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Miejsce nauki:</label>

                            <label class="checkbox-inline">
                                <input type="checkbox" name="online" {{ old('online')=="on" ? 'checked' : '' }}>Online
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="teacher_home"{{ old('teacher_home')=="on" ? 'checked' : '' }}>W domu nauczyciela
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="student_home" {{ old('student_home')=="on" ? 'checked' : ''}}>W domu ucznia
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="price_per_hour" class="col-md-4 control-label">Kategoria:</label>

                            <div class="col-md-6">
                                <select name="category_id" class="form-control" >
                                    @foreach( $categories as $category )
                                    <option value="{{  $category->id  }}" >{{  $category->name  }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="location" class="col-md-4 control-label">Lokalizacja</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="{{  old('location')  }}" required>
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