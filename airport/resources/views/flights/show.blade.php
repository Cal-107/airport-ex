@extends('app')

@section('title', 'flight-detail')

@section('content')
    <section>
        <h1 class='my-5'>Flight Detail</h1>
        <div class='d-flex justify-content-center'>
            <div class="card w-50" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-title">Flight Code: {{ $flight->flight_code }}</p>
                    <p class="card-title">Date: {{ $flight->date }}</p>
                    <p class="card-text">Take Off: {{ $flight->take_off }}</p>
                    <p class="card-text">Landing: {{ $flight->landing }}</p>
                    <a href="{{ route('flights.index') }}" class="btn btn-success">Go Back</a>
                </div>
            </div>
        </div>

        <h2 class="my-4">Passenger</h2>
        <table class="table table-success col-6 text-center table-striped table-hover border border-success">
            <thead>
                <tr>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Flight ID</th>
                    <th scope="col">Personal Flight's Code</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Delete Passenger</th>
                    <th scope="col">Edit Passenger</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flight->passengers as $passenger)
                    <tr>
                        <td>{{ $passenger->firstname }}</td>
                        <td>{{ $passenger->lastname }}</td>
                        <td>{{ $passenger->flight->flight_code }}</td>
                        <td>{{ $passenger->code }}</td>
                        <td>
                            <a href="{{ route('passengers.show', $passenger->id) }}">
                                <button class="btn btn-primary">Show Passenger</button>
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('passengers.destroy', $passenger) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete Passenger</button>
                            </form>
                        </td>

                        <td>
                            <a href="{{ route('passengers.edit', $passenger) }}">
                                <button class="btn btn-dark">Edit Passenger</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
