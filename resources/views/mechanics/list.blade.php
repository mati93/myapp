@extends('template')

@section('content')
<div class="container">
<br>
<h2>Mechanicy pracujący w warsztacie</h2>
<div>
<a href="{{URL::to('mechanics/create')}}" class="btn btn-outline-secondary">Dodaj nowego mechanika</a>
</div>
<br>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Imię i nazwisko</th>
      <th scope="col">Email</th>
      <th scope="col">Numer telefonu</th>
      <th scope="col">Operacje</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($mechanicsList as $mechanic)
    <tr>
      <th scope="row">{{ $mechanic->id}}</th>
      <td>{{ $mechanic->name }}</td>
      <td>{{ $mechanic->email }}</td>
      <td>{{ $mechanic->phone }}</td>
      <td><a href="{{URL::to('mechanics/show/' . $mechanic->id)}}" class="btn btn-info btn-sm">Szczegóły</a>
      <a href="{{URL::to('mechanics/edit/' . $mechanic->id)}}" class="btn btn-primary btn-sm">Edytuj</a>
      <a href="{{URL::to('mechanics/delete/' . $mechanic->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Czy napewno usunąć ?')">Usuń</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection('content')
