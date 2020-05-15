@extends('template')

@section('content')
<div class="container">
<br>
<h2>Edycja klienta</h2>
<br>
<form action="{{ action('ClientController@editStore')}}" method="POST" role="form">
<input type="hidden" name="id" value="{{ $client->id}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="form-group">
<label for="name">Imię i Nazwisko</label>
<input type="text" class="form-control" name="name" value="{{$client->name}}"/>
</div>
<div class="form-group">
<label for="name">Adres email</label>
<input type="text" class="form-control" name="email" value="{{$client->email}}"/>
</div>
<div class="form-group">
<label for="name">Numer telefonu</label>
<input type="text" class="form-control" name="phone" value="{{$client->phone}}"/>
</div>

<input type="submit" value="Edytuj" class="btn btn-primary"/>
</form>
</div>
@endsection('content')
