@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row">

            @forelse ($trains as $train)
                <div class="col-6 col-md-4 col-lg-4 g-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>Company: {{ $train->company }}</h5>
                            <p class="m-0">from: {{ $train->departure_station }}</p>
                            <p class="m-0">to: {{ $train->arrival_station }}</p>
                        </div>
                        <div class="card-body">
                            <p class="m-0">start: <strong>{{ $train->departure_time }}</strong></p>
                            <p class="m-0">arrive: <strong>{{ $train->arrival_time }}</strong></p>
                            <p class="m-0">in time? <strong><?= $train->on_time ? 'yes' : 'no' ?></strong></p>
                            <p class="m-0">deleted? <strong><?= $train->deleted ? 'yes' : 'no' ?></strong></p>
                        </div>
                    </div>
                </div>
            @empty
                <p>THERE ISN'T ANY TRAINS!!!</p>
            @endforelse

        </div>
    </div>
@endsection
