@extends('template')

@section('content')
<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ action('ClientController@store')}}" method="POST" role="form">
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
<label for="name">Numer telefonu</label>
<input type="text" class="form-control" name="phone"/>
</div>
<div class="form-group">
<label for="name">Hasło</label>
<input type="password" class="form-control" name="password"/>
</div>
<input type="hidden" name="type" value="client"/>
<input type="submit" value="Dodaj" class="btn btn-primary"/>
</form>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
