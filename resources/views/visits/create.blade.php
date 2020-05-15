@extends('template')

@section('content')
<div class="container">
<br>
<h2>Dodaj wizytę</h2>
<br>
<form action="{{ action('VisitController@store')}}" method="POST" role="form">
<input type="hidden" name="_token" value="{{csrf_token()}}">

<div class="form-group">
<label for="mechanic">Mechanik:</label>
<select name="mechanic">
@foreach ($mechanics as $mechanic)
<option value="{{$mechanic->id}}">{{$mechanic->name}}</option>
@endforeach
</select>
</div>

<div class="form-group">
<label for="client">Klient:</label>
<select name="client">
@foreach ($clients as $client)
<option value="{{$client->id}}">{{$client->name}}</option>
@endforeach
</select>
</div>

<div class="form-group">
<label for="name">Data</label>
<input type="text" class="form-control" name="date"/>
</div>

<div class="form-group">
<label for="name">Numer rejestracyjny pojazdu</label>
<input type="text" class="form-control" name="carnumber"/>
</div>

<div class="form-group">
<label for="name">Opis usterki</label>
<input type="text" class="form-control" name="description"/>
</div>

<input type="hidden" name="status" value="Zarejestrowana"/>

<input type="submit" value="Dodaj" class="btn btn-primary"/>
</form>
</div>
@endsection('content')
