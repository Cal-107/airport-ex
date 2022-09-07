@extends('app')

@section('title', 'Edit-flight')

@section('content')
    <h1>Edit flight</h1>
    <form method="POST" action="{{ route('flights.store') }}">
        @csrf
        @include('flights.form')
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
        <a href="{{ route('flights.index') }}" class="btn btn-primary">Go Back</a>
    </form>
@endsection