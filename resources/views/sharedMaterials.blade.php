@extends('layouts/main')
@section('content')
<div class="container">
  <h2>Udostępnione Materiały</h2>
  <p>Zarządzaj udostępnionymi materiałami</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Tytuł</th>
        <th>Użytkownik</th>
        <th>Akcja</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>informatyka</td>
        <td>John</td>
        <td><button type="button" class="btn btn-default">Edytuj</button></td>
      </tr>
      
    </tbody>
  </table>
  
  <h2>Udostępnij nowy materiał</h2>
  <form class="form-inline">
  <div class="form-group">
    <label for="email">Email użytkownika</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Tytuł</label>
    <input type="text" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btn-default">Dodaj</button>
</form> 
  
</div>
@endsection