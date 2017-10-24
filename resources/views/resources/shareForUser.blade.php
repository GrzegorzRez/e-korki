@extends('layouts/main')
@section('content')
    <div class="container">
        <h3>Wybierz materiały które mają być udostępnione dla użytkownika {{  $user->getFullName()  }}</h3>
        <form action="{{  route('resources.share',['user'=>$user])  }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                @foreach( $resources as $resource )
                    <label class="checkbox">
                        <input type="checkbox" id="online" name="resources_id[]" value="{{ $resource->id }}">{{ $resource->title }}
                    </label>
                @endforeach
            </div>

            <div class="form-group">
                <button id="submit" type="submit" class="btn btn-primary">
                    Aktualizuj
                </button>
            </div>
        </form>
    </div>
@endsection