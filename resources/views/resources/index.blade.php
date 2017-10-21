@extends('layouts/main')
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
        <td><a href="{{  route('resources.show',['id'=>$resource->id])  }}" class="btn btn-primary" role="button">Otwórz</a><a href="#" class="btn btn-default" role="button">Edytuj</a>
          <form action="{{  route('resources.delete',['resource'=>$resource]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger" value="Usuń">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
 <a href="{{  route('resources.add')  }}" class="btn btn-primary" role="button">Dodaj nowy materiał</a>
  
</div>
@endsection