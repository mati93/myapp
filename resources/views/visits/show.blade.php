@extends('template')

@section('content')
<div class="container">
<br>
<h2>Szczegóły wizyty</h2>
<div>

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Informacje dotyczące wizyty
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
    <div class="card-body">
<table class="table">
<tr>
<td>Data:</td>
<td>{{$visit->date}}</td>
</tr>
<tr>
<td>Status:</td>
<td>{{ $visit->status}}</td>
</tr>
<tr>
<td>Numer rejestracyjny:</td>
<td>{{ $visit->carnumber}}</td>
</tr>
<tr>
<td>Opis usterki:</td>
<td>{{ $visit->description}}</td>
</tr>
</table>
</div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Informacje dotyczące klienta
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
    <div class="card-body">
<table class="table">
<tr>
<td>Klient:</td>
<td>{{ $visit->client->name}}</td>
</tr>
<tr>
<td>Numer telefonu:</td>
<td>{{ $visit->client->phone}}</td>
</tr>
<tr>
<td>Adres email:</td>
<td>{{ $visit->client->email}}</td>
</tr>
</table>
</div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Informacje dotyczące mechanika
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
    <div class="card-body">
<table class="table">
<tr>
<td>Mechanik:</td>
<td>{{ $visit->mechanic->name}}</td>
</tr>
<tr>
<td>Numer telefonu:</td>
<td>{{ $visit->client->phone}}</td>
</tr>
<tr>
<td>Adres email:</td>
<td>{{ $visit->mechanic->email}}</td>
</tr>
</table>
</div>
    </div>
  </div>
</div>
@endsection('content')