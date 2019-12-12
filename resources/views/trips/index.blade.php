@extends('layouts.app')

@section('title', 'Trips')

@section('content')
    <p>Trips available: </p>
    <ul>
        @foreach ($trips as $trip)

            {{-- <li> {{ $trip->trip_title}}</li> --}}
            <li><a href="{{ route('trips.show', ['id' => $trip->id]) }}">{{ $trip->trip_title}} </a></li>

        @endforeach
    </ul>
@endsection
