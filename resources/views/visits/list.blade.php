@extends('template')

@section('content')
<div class="container">
<br>
<h2>Lista wizyt w warsztacie</h2>
<div>
<a href="{{URL::to('visits/create')}}" class="btn btn-outline-secondary">Dodaj nową wizytę</a>
  <button class="btn btn-outline-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Statystyki
  </button>  <br>
  <br>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  @foreach ($statistics as $stat)
@if ($stat->status == "Zarejestrowana")
<p class="card-text">Liczba zaplanowanych wizyt: {{$stat->visit_count}}</p>
@endif
@if ($stat->status == "W trakcie naprawy")
<p class="card-text">Liczba trwających wizyt: {{$stat->visit_count}}</p>
@endif
@if ($stat->status == "Zakończona")
<p class="card-text">Liczba zakończonych wizyt: {{$stat->visit_count}}</p>
@endif
@endforeach
  </div>
</div>
</div>
<br>
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mechanik</th>
      <th scope="col">Klient</th>
      <th scope="col">Data wizyty</th>
      <th scope="col">Status</th>
      <th scope="col">Operacje</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($visitsList as $visit)
    <tr>
      <th scope="row">{{ $visit->id}}</th>
      <td>{{ $visit->mechanic->name}}</td>
      <td>{{ $visit->client->name}}</td>
      <td>{{ $visit->date}}</td>
      <td>{{ $visit->status}}</td>
      <td><a href="{{URL::to('visits/' . $visit->id)}}" class="btn btn-info btn-sm">Szczegóły</a>
      <a href="{{URL::to('visits/edit/' . $visit->id)}}" class="btn btn-primary btn-sm">Edytuj</a>
      <a href="{{URL::to('visits/delete/' . $visit->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Czy napewno usunąć ?')">Usuń</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection('content')