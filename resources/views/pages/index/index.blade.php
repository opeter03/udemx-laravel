@extends('layouts.main')

@section('content')

<div>
    <h2>Főoldal</h2>
    <p>
        Adatbázisból lekérdezett adatok:
    </p>

<div style="padding-top: 30px;">
    @foreach($cities as $city)
        <h4>{{ $city->name }}</h4>
        <span><b>Ir.szám:</b> {{ $city->postcode }}</span> - <span><b>Terület:</b> {{ $city->area }} km^2</span> - <span><b>Népesség:</b> {{ $city->people }}</span>
        <hr/>
    @endforeach
</div>

</div>


@stop