@extends('app')

@section('title', 'Edit Passenger')

@section('content')
    <h1>Edit Passenger</h1>
    <form method="POST" action="{{ route('passengers.update', $passenger->id) }}">
        @csrf
        @method('PATCH')
        @include('passengers.form')
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
        <a href="{{ route('passengers.index') }}" class="btn btn-primary">Go Back</a>
    </form>
@endsection