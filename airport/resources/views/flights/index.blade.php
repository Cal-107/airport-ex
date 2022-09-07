@extends('app')

@section('title', 'Flight')

@section('content')
    <div class='row d-flex justify-content-center'>
        <h1 class='my-5'>Flights List</h1>
        <div class="my-3 text-end">
            <a href="{{ route('flights.create') }}">
                <button class="btn btn-primary">
                    Add Flight
                </button>
            </a>
        </div>
        <table class="table table-success col-6 text-center table-striped table-hover border border-success">
            <thead>
                <tr>
                    <th scope="col">Flight Code</th>
                    <th scope="col">Flight's Detail</th>
                    <th scope="col">Delete Flight</th>
                    <th scope="col">Edit Flight</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($flights as $flight)
                    <tr>
                        <td>{{ $flight->flight_code }}</td>
                        <td>
                            <a href="{{ route('flights.show', $flight->id) }}">
                                <button class="btn btn-primary">Show Flight</button>
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('flights.destroy', $flight) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete Flight</button>
                            </form>
                        </td>

                        <td>
                            <a href="{{ route('flights.edit', $flight) }}">
                                <button class="btn btn-dark">Edit Flight</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
