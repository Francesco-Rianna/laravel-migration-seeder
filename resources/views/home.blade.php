@extends('layouts.app')

@section('content')
    <h1 class="text-center">I treni in partenza oggi</h1>

    <div class="container">
        <div class="d-flex flex-wrap gap-2">
            @foreach ($trains as $train)

                <div class="card mt-2 p-5 fs-3">
                    <div>Agency: {{ $train->agency }}</div>
                    <div>{{ $train->departure_station }} - {{ $train->departure_time }}</div>
                    <div>{{ $train->arrival_station }} - {{ $train->arrival_time }}</div>
                    <div>Number of Carriages: {{ $train->number_of_carriages }}</div>
                    <div>Train Code: {{ $train->train_code }}</div>
                </div>
            @endforeach
        </div>

    
        </div>
@endsection

            
    