@extends('layouts.app')

@section('title', 'Create Trip Coordinator')

@section ('content')
<form method = "POST" action= "{{ route ('tripcoordinators.store') }}">
    @csrf
    <p>Name: <input type = "text" name = "name" 
        value="{{ old('name') }}"></p>

    <p>Email: <input type = "text" name = "email"  
        value="{{ old('email') }}"></p>

    <p>Email verification: <input type = "text" name = "email_verified_at"  
        value="{{ old('email_verified_at') }}"></p>

    <p>Start date: <input type = "text" name = "employment_start_date"  
        value="{{ old('trip_start_date') }}"></p>

    <input type="submit" value="Submit">

    <a href="{{ route('tripcoordinators.index') }}">Cancel</a>



</form>

@endsection