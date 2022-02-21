@extends('layouts.base')

@section('content')

<div class="row-cols-4">
    @foreach ($trains as $element)
    <div class="card p-2">
        <span class="text-center px-4 py-3">{{ $element->train_code }}</h2>
        <span>Stazione di Partenza: {{ $element->department_station }}</span>
        <span>Ore: {{ $element->departure_time }}</span>
        <span>Stazione di arrivo: {{ $element->arrive_station }}</span>
        <span>Orario previsto: {{ $element->arrive_time }}</span>
        <span>Carrozze: {{ $element->carriage }}</span>
        <span>Ritardo previsto: {{ $element->in_time }}</span>
        <span>Stato corsa: {{ $element->cancelled }}</span>
    </div>
    @endforeach
</div>
    

@endsection
