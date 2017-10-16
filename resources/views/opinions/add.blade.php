@extends('layouts/main')
@section('content')

    <h1 class="text-center">Dodaj opinie o {{ $teacher->name  }} {{ $teacher->surname  }}</h1>
    <form class="form-horizontal" method="POST" action="{{route('opinions.store')}}">
        {{ csrf_field() }}

        <input type="hidden" class="form-control" name="teacher_id" value="{{ $teacher->id }}" required>

        <div class="form-group">
            <label for="content" class="col-md-4 control-label">Treść</label>

            <div class="col-md-6">
                <input id="content" type="text" class="form-control" name="content" required autofocus>
            </div>
        </div>

        <div class="form-group">
            <label for="grade" class="col-md-4 control-label">Ocena</label>

            <div class="col-md-6">
                <input id="grade" type="number" class="form-control" name="grade" required>
            </div>
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

