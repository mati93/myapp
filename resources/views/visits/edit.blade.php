@extends('template')

@section('content')
<div class="container">
<br>
<h2>Edycja mechanika</h2>
<br>
<form action="{{ action('VisitController@editStore')}}" method="POST" role="form">
<input type="hidden" name="id" value="{{ $visit->id}}">
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
<input type="text" class="form-control" name="date" value="{{$visit->date}}"/>
</div>

<div class="form-group">
<label for="name">Numer rejestracyjny</label>
<input type="text" class="form-control" name="carnumber" value="{{$visit->carnumber}}"/>
</div>

<div class="form-group">
<label for="name">Opis usterki</label>
<input type="text" class="form-control" name="description" value="{{$visit->description}}"/>
</div>

<div class="form-group">
<label for="name">Status</label>
<input type="text" class="form-control" name="status" value="{{$visit->status}}"/>
</div>

<input type="submit" value="Edytuj" class="btn btn-primary"/>
</form>
</div>
@endsection('content')
