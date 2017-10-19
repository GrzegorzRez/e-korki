@extends('layouts/main')
@section('content')
<div class="container">
  <h2>Materiały udostępnione dla Ciebie</h2>
  <p>przeglądaj swoje materiały</p>            
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
        <td><button type="button" class="btn btn-default">Zobacz zawartość</button></td>
      </tr>
      
    </tbody>
  </table>
  
</div>
@endsection