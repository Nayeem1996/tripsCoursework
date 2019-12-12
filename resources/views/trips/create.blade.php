@extends('layouts.app')

@section('title', 'Create Trip')

@section ('content')
<form method = "POST" action= "{{ route ('trips.store') }}">
    @csrf
    <p>Trip title: <input type = "text" name = "trip_title" 
        value="{{ old('trip_title') }}"></p>

    <p>City: <input type = "text" name = "city"  
        value="{{ old('city') }}"></p>

    <p>Details: <input type = "text" name = "trip_detail"  
        value="{{ old('trip_detail') }}"></p>

    <p>Start date: <input type = "text" name = "trip_start_date"  
        value="{{ old('trip_start_date') }}"></p>

    <p>Price: <input type = "text" name = "trip_price"  
        value="{{ old('trip_price') }}"></p>

    <p>Coordinator ID: <input type = "text" name = "trip_coordinator_id"  
        value="{{ old('trip_coordinator_id') }}"></p>

    <input type="submit" value="Submit">

    <a href="{{ route('trips.index') }}">Cancel</a>
</form>

@endsection