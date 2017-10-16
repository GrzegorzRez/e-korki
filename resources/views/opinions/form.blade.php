<form class="form-horizontal" method="POST" action="{{route('opinions.store')}}">
    {{ csrf_field() }}

    <input type="hidden" class="form-control" name="teacher_id" value="{{ $teacher->id }}" required>

    <div class="form-group">
        <label for="content" class="col-md-4 control-label">Treść</label>

        <div class="col-md-6">
            <textarea id="content" class="form-control" name="content" autofocus>{{ old('content') }}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="grade" class="col-md-4 control-label">Ocena</label>

        <label class="radio-inline">
            <input type="radio" name="grade" value="1" {{ old('grade')=="1" ? 'checked' : '' }}>1
        </label>
        <label class="radio-inline">
            <input type="radio" name="grade" value="2" {{ old('grade')=="2" ? 'checked' : '' }}>2
        </label>
        <label class="radio-inline">
            <input type="radio" name="grade" value="3" {{ old('grade')=="3" ? 'checked' : '' }}>3
        </label>
        <label class="radio-inline">
            <input type="radio" name="grade" value="4" {{ old('grade')=="4" ? 'checked' : '' }}>4
        </label>
        <label class="radio-inline">
            <input type="radio" name="grade" value="5" {{ old('grade')=="5" ? 'checked' : '' }}>5
        </label>
        <label class="radio-inline">
            <input type="radio" name="grade" value="6" {{ old('grade')=="6" ? 'checked' : '' }}>6
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

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif