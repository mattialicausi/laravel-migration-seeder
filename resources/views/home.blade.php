@extends('layouts.app')


@section('content')

<div class="row">

    @foreach ($trains as $train)

    <div class="col-3 m-3">

        <h3 class="text-primary">{{$train->enterprise}}</h3>
        <div>Luogo di Partenza: {{$train->departure_station}}</div>
        <div>Luogo di arrivo: {{$train->arrival_station}}</div>
        <div>Data del viaggio: {{$train->date}}</div>
        <div>Orario di partenza: {{$train->departure_time}}</div>
        <div>Codice treno: {{$train->train_code}}</div>
        <div>Numero di carrozze: {{$train->n_carriages}}</div>

        @if ($train->in_time = 1 ? 'Si' : 'No')
            <div>In tempo: {{$train->in_time}}</div>
        @endif

        @if ($train->deleted = 1 ? 'Si' : 'No')
            <div>Cancellato: {{$train->deleted}}</div>
        @endif

    </div>

    @endforeach
</div>


@endsection
