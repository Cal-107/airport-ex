@extends('app')

@section('title', 'Passengers')

@section('content')
    <div class='row d-flex justify-content-center'>
        <h1 class='my-5'>Passengers List</h1>
        <div class="my-3 text-end">
            <a href="{{ route('passengers.create') }}">
                <button class="btn btn-primary">
                    Add Player
                </button>
            </a>
        </div>
        <table class="table table-success col-6 text-center table-striped table-hover border border-success">
            <thead>
                <tr>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Flight Code</th>
                    <th scope="col">Personal Flight's Code</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Delete Passenger</th>
                    <th scope="col">Edit Passenger</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($passengers as $passenger)
                    <tr>
                        <td>{{ $passenger->firstname }}</td>
                        <td>{{ $passenger->lastname }}</td>
                        <td>
                            {{ isset($passenger->flight->flight_code) ? $passenger->flight->flight_code : '' }}
                        </td>
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
    </div>
@endsection
