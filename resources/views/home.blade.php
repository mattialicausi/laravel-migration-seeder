@extends('layouts.app')


@section('content')

<div class="row py-5">

    @foreach ($trains as $train)

    <div class="col-3 m-3">

        <h3 class="text-primary">{{$train->enterprise}}</h3>
        <div>Luogo di Partenza: <span class="text-success">{{$train->departure_station}}</span></div>
        <div>Luogo di arrivo: <span class="text-success">{{$train->arrival_station}}</span></div>
        <div>Data del viaggio: <span class="text-success">{{$train->date}}</span></div>
        <div>Orario di partenza: <span class="text-success">{{$train->departure_time}}</span></div>
        <div>Codice treno: <span class="text-success">{{$train->train_code}}</span></div>
        <div>Numero di carrozze: <span class="text-success">{{$train->n_carriages}}</span></div>

        @if ($train->in_time = 1 ? 'Si' : 'No')
            <div>In tempo: <span class="text-success">{{$train->in_time}}</span></div>
        @endif

        @if ($train->deleted = 1 ? 'Si' : 'No')
            <div>Cancellato: <span class="text-success">{{$train->deleted}}</span></div>
        @endif

    </div>

    @endforeach
</div>


@endsection
