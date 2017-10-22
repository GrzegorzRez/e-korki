@extends('layouts/main')
@section('title','Edytuj ofertę')
@push('styles')
    <link rel="stylesheet" href="/css/jquery.tagsinput.css">
@endpush
@section('content')
    <script src="/js/jquery.tagsinput.js"></script>

    <h1 class="text-center">Edytuj ofertę</h1>
	<div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('offers.update')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ (old('id')=='') ? $offer->id : old('id') }}" >
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nazwa</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ (old('name')=='') ? $offer->name : old('name')}}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Opis</label>

                            <div class="col-md-6">
                                <textarea id="description" name="description" class="form-control" required>{{ (old('description')=='') ? $offer->description : old('description')}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price_per_hour" class="col-md-4 control-label">Cena</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="price_per_hour" type="number" step="0.01" class="form-control" name="price_per_hour" value="{{ (old('price_per_hour')=='') ? $offer->price_per_hour : old('price_per_hour')}}" required>
                                    <span class="input-group-addon">zł / 60 minut</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Miejsce nauki:</label>

                            <label class="checkbox-inline">
                                <input type="checkbox" id="online" name="online" onchange="checkboxStatusChange()" {{ old('online')=="on" ? 'checked' : ( $offer->online ? 'checked' : '') }}>Online
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="teacher_home" name="teacher_home" onchange="checkboxStatusChange()" {{ old('teacher_home')=="on" ? 'checked' : ( $offer->teacher_home ? 'checked' : '') }}>W domu nauczyciela
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="student_home" name="student_home" onchange="checkboxStatusChange()" {{ old('student_home')=="on" ? 'checked' : ( $offer->student_home ? 'checked' : '')}}>W domu ucznia
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="category_id" class="col-md-4 control-label">Kategoria:</label>

                            <div class="col-md-6">
                                <select id="category_id" name="category_id" class="form-control" >
                                    {{  $selectedCategoryId = (old('category_id')=='') ? $offer->category_id : old('category_id')  }}
                                    @foreach( $categories as $category )
                                        @if( $offer->category_id == $selectedCategoryId )
                                            <option value="{{  $category->id  }}" selected>{{  $category->name  }}</option>
                                        @else
                                            <option value="{{  $category->id  }}" >{{  $category->name  }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="location" class="col-md-4 control-label">Lokalizacja</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="{{ (old('location')=='') ? $offer->location : old('location')}}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tags" class="col-md-4 control-label">Tagi</label>
                            <div class="col-md-6">
                                <input id="tags" type="text" class="form-control" name="tags" value="{{ (old('tags')=='') ? $tags : old('tags')}}" data-role="tagsinput">
                                <small id="emailHelp" class="form-text text-muted">Wpisz tag, następnie zatwierdź go enterem.</small>
                            </div>
                        </div>
                        <script>
                            $('#tags').tagsInput({
                                'defaultText':'dodaj tag',
                                'width':'100%',
                                'height':'50px'
                            });
                        </script>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button id="submit" type="submit" class="btn btn-primary">
                                    Zapisz zmiany
                                </button>
                                <qq class='alert alert-danger' id="submit_info"></qq>
                            </div>
                        </div>
                    </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <script>

        checkboxStatusChange();
        function checkboxStatusChange(){
            if( !document.getElementById('online').checked && !document.getElementById('teacher_home').checked && !document.getElementById('student_home').checked ) {
                $('#submit').attr("disabled", true);
                $('#submit').hide();
                $('#submit_info').html('Wybierz miejsce nauki!');
                $('#submit_info').show();
            }else{
                $('#submit').attr("disabled", false);
                $('#submit').show();
                $('#submit_info').html('');
                $('#submit_info').hide();
            }
        }

    </script>
@endsection