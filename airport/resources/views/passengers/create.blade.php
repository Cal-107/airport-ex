@extends('app')

@section('title', 'Add Passenger')

@section('content')
    <h1>Add Passenger</h1>
    <form method="POST" action="{{ route('passengers.store') }}">
        @csrf
        @include('passengers.form')
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
        <a href="{{ route('passengers.index') }}" class="btn btn-primary">Go Back</a>
    </form>
@endsection