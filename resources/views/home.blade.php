@extends('layouts.base')

@section('content')

<div class="container">
    <div class="row ">
        @foreach ($trains as $element)
        <div class="col-4 py-4">
            <div class="card p-2">
                <h3 class="text-center px-4 py-3">Compagnia: {{ $element->company }}</h3>
                <h5>Codice treno: {{ $element->train_code  }}</h5>
                <span>Stazione di Partenza: {{ $element->department_station }}</span>
                <span>Orario di partenza: {{ $element->departure_time }}</span>
                <span>Stazione di arrivo: {{ $element->arrive_station }}</span>
                <span>Orario di arrivo previsto: {{ $element->arrive_time }}</span>
                <span>Carrozze: {{ $element->carriage }}</span>
                <span>Ritardo previsto: {{ $element->in_time }}</span>
                <span>Stato corsa: {{ $element->cancelled }}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
    

@endsection
