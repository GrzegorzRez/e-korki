@extends('layouts/main')
@section('content')

    <h1 class="text-center">Dodaj opinie o {{ $teacher->name  }} {{ $teacher->surname  }}</h1>
    <form class="form-horizontal" method="POST" action="{{route('opinions.store')}}">
        {{ csrf_field() }}

        <input type="hidden" class="form-control" name="teacher_id" value="{{ $teacher->id }}" required>

        <div class="form-group">
            <label for="content" class="col-md-4 control-label">Treść</label>

            <div class="col-md-6">
                <textarea id="content" class="form-control" name="content" autofocus></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="grade" class="col-md-4 control-label">Ocena</label>

            <label class="radio-inline">
                <input type="radio" name="grade" value="1">1
            </label>
            <label class="radio-inline">
                <input type="radio" name="grade" value="2">2
            </label>
            <label class="radio-inline">
                <input type="radio" name="grade" value="3">3
            </label>
            <label class="radio-inline">
                <input type="radio" name="grade" value="4">4
            </label>
            <label class="radio-inline">
                <input type="radio" name="grade" value="5">5
            </label>
            <label class="radio-inline">
                <input type="radio" name="grade" value="6">6
            </label>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Prześlij opinię
                </button>
            </div>
        </div>
    </form>

@endsection

