@extends('template')

@section('content')
<div class="container">
<br>
<h2>Informacje o mechaniku</h2>
<div>
<div class="card">
  <div class="card-header">
  {{ $mechanic->name}}
  </div>
  <div class="card-body">
<table class="table">
<tr>
<td>Id:</td>
<td>{{ $mechanic->id}}</td>
</tr>
<tr>
<td>Email:</td>
<td>{{ $mechanic->email}}</td>
</tr>
<tr>
<td>Numer telefonu:</td>
<td>{{ $mechanic->phone}}</td>
</tr>
</table>
</div>
</div>
</div>
@endsection('content')