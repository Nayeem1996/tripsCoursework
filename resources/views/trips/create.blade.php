@extends('layouts.app')

@section('title', 'Create a new trip')

@section('content')

    <form method="POST" action="{{ route('trips.store') }}">
        @csrf
        <p>Trip title: <input type="text" name="trip_title" 
            value="{{ old('trip_title') }}"></p>

        <p>City: <input type="text" name="city" 
            value="{{ old('city') }}"></p>

        <p>Details/description: <input type="text" name="trip_detail" 
            value="{{ old('trip_detail') }}"></p>

        <p>Start date: <input type="text" name="trip_start_date" 
            value="{{ old('trip_start_date') }}"></p>

        {{-- Trip ended boolean value not set as it should be default value (false) when a trip is created  --}}

        <p>Price: <input type="text" name="trip_price" 
            value="{{ old('trip_price') }}"></p>

        <p>Trip coordinator ID: <input type="text" name="trip_coordinator_id" 
            value="{{ old('trip_coordinator_id') }}"></p>

        <input type="submit" value="Submit">

        <a href=" {{ route('trips.index' )}}">Cancel</a>
    </form>
    
@endsection