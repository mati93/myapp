@extends('template')

@section('content')
<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Witamy !!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Witaj w naszym systemie rezerwacji! Zaplanuj swoją wizytę już teraz
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
