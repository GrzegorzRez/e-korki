@extends('layouts/main')
@section('title','Lista materiałów')
@section('content')
<div class="container">
  <h2>Utworzone materiały</h2>
  <p>Zarządzaj stworzonymi materiałami</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Tytuł</th>
        <th>Ostatnia edycja</th>
        <th>Akcja</th>
      </tr>
    </thead>
    <tbody>
        @foreach($resources as $resource)
      <tr>
        <td> {{ $resource->title }} </td>
        <td> {{ $resource->updated_at }} </td>
        <td>
          <form action="{{  route('resources.delete',['resource'=>$resource]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <a href="{{  route('resources.show',['resource'=>$resource])  }}" class="btn btn-primary" role="button">Otwórz</a>
            <a href="{{ route('resources.edit',['resource'=>$resource])  }}" class="btn btn-default" role="button">Edytuj</a>
            <button type="submit" class="btn btn-danger">Usuń</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a href="{{  route('resources.add')  }}" class="btn btn-primary" role="button">Dodaj nowy materiał</a>

  

  <h2>Udostępnione mi materiały</h2>
  <p>Przeglądaj udostępnione materiały</p>
  <table class="table table-striped">
    <thead>
    <tr>
      <th>Tytuł</th>
      <th>Autor</th>
      <th>Akcja</th>
    </tr>
    </thead>
    <tbody>
    @foreach($sharedResources as $resource)
      <tr>
        <td> {{ $resource->title }} </td>
        <td> {{ $resource->user->getFullName() }} </td>
        <td>
          <a href="{{  route('resources.show',['resource'=>$resource])  }}" class="btn btn-primary" role="button">Otwórz</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  
</div>
@endsection