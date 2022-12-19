@extends('layouts.app')


@section('content')

<h1>Main</h1>

<div class="row">

    @foreach ($trains as $train)

    <div class="col-3">

        <div>{{$train->enterprise}}</div>
        <div>{{$train->departure_station}}</div>
        <div>{{$train->date}}</div>
        <div>{{$train->departure_time}}</div>
        <div>{{$train->arrival}}</div>
        <div>{{$train->train_code}}</div>
        <div>{{$train->n_carriages}}</div>

        @if ($train->n_carriages == true ? 'Si' : 'No')
            <div>{{$train->n_carriages}}</div>
        @endif

        @if ($train->n_carriages == true ? 'Si' : 'No')
            <div>{{$train->deleted}}</div>
        @endif

    </div>

    @endforeach
</div>


@endsection
