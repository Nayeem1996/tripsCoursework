@extends('layouts.app')

@section('title', 'Trips')

@section('content')
    <p>Trips available: </p>
    <ul>
        @foreach ($trips as $trip)

            <li>{{ $trip->trip_title}}</li>

        @endforeach
    </ul>
@endsection
