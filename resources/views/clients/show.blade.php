@extends('template')

@section('content')
<div class="container">
<br>
<h2>Informacje o kliencie</h2>
<div>
<div class="card">
  <div class="card-header">
  {{ $client->name}}
  </div>
  <div class="card-body">
<table class="table">
<tr>
<td>Id:</td>
<td>{{ $client->id}}</td>
</tr>
<tr>
<td>Email:</td>
<td>{{ $client->email}}</td>
</tr>
<tr>
<td>Numer telefonu:</td>
<td>{{ $client->phone}}</td>
</tr>
</table>
</div>
</div>
</div>
@endsection('content')