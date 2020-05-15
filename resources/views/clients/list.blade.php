@extends('template')

@section('content')
<div class="container">
<br>
<h2>Klienci warsztatu</h2>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imię i nazwisko</th>
      <th scope="col">Email</th>
      <th scope="col">Numer telefonu</th>
      <th scope="col">Opcje</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($clientsList as $client)
    <tr>
      <th scope="row">{{ $client->id}}</th>
      <td>{{ $client->name }}</td>
      <td>{{ $client->email }}</td>
      <td>{{ $client->phone }}</td>
      <td><a href="{{URL::to('clients/show/' . $client->id)}}" class="btn btn-info btn-sm">Szczegóły</a>
      <a href="{{URL::to('clients/edit/' . $client->id)}}" class="btn btn-primary btn-sm">Edytuj</a>
      <a href="{{URL::to('clients/delete/' . $client->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Czy napewno usunąć ?')">Usuń</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection('content')
