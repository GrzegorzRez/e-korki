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
        <td><button type="button" class="btn btn-default">Edytuj</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
 <a href="#" class="btn btn-primary" role="button">Dodaj nowy materiał</a>
  
</div>
@endsection