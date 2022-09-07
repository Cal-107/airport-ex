@extends('app')

@section('title', 'passenger-detail')

@section('content')
    <section>
        <h1 class='my-5'>Passenger Detail</h1>
        <div class='d-flex justify-content-center'>
            <div class="card w-50" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-title">Firstname: {{ $passenger->firstname }}</p>
                    <p class="card-title">Lastname: {{ $passenger->lastname }}</p>
                    <p class="card-text">Birthdate: {{ $passenger->birthdate }}</p>
                    <p class="card-text">Flight ID: {{ $passenger->flight_id }}</p>
                    <p class="card-text">Code: {{ $passenger->code }}</p>
                    <a href="{{ route('passengers.index') }}" class="btn btn-success">Go Back</a>
                </div>
            </div>
        </div>
    </section>
@endsection
