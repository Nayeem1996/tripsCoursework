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
    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            {{ $trips->links() }}
        </div>
    </div>

    <div>
        <a href="{{ route('trips.create' )}}">Create trips</a>
    </div>
@endsection
