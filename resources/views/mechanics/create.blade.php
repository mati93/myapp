@extends('template')

@section('content')
<div class="container">
<br>
<h2>Dodaj mechanika</h2>
<br>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action('MechanicController@store')}}" method="POST" role="form">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="form-group">
<label for="name">Imię i Nazwisko</label>
<input type="text" class="form-control" name="name"/>
</div>
<div class="form-group">
<label for="name">Adres email</label>
<input type="text" class="form-control" name="email"/>
</div>
<div class="form-group">
<label for="name">Hasło</label>
<input type="password" class="form-control" name="password"/>
</div>
<div class="form-group">
<label for="name">Numer telefonu</label>
<input type="text" class="form-control" name="phone"/>
</div>
<input type="hidden" name="type" value="mechanic"/>
<input type="submit" value="Dodaj" class="btn btn-primary"/>
</form>
</div>
@endsection('content')
