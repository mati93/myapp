@extends('template')

@section('content')
<div class="container">
<br>
<h2>Edycja mechanika</h2>
<br>
<form action="{{ action('MechanicController@editStore')}}" method="POST" role="form">
<input type="hidden" name="id" value="{{ $mechanic->id}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="form-group">
<label for="name">Imię i Nazwisko</label>
<input type="text" class="form-control" name="name" value="{{$mechanic->name}}"/>
</div>
<div class="form-group">
<label for="name">Adres email</label>
<input type="text" class="form-control" name="email" value="{{$mechanic->email}}"/>
</div>
<div class="form-group">
<label for="name">Numer telefonu</label>
<input type="text" class="form-control" name="phone" value="{{$mechanic->phone}}"/>
</div>

<input type="submit" value="Edytuj" class="btn btn-primary"/>
</form>
</div>
@endsection('content')
