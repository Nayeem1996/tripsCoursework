@extends('layouts.app')

@section('title', 'Trip Details')

@section ('content')
    <ul>
        <li>Trip title: {{ $trip->trip_title }} </li>
        <li>City: {{ $trip->city }} </li>
        <li>Trip Description: {{ $trip->trip_detail }} </li>
        <li>Trip start date: {{ $trip->trip_start_date }} </li>
        <li>Is the trip over: {{ $trip->trip_ended }} </li>
        <li>Price of the trip per person: {{ $trip->trip_price ?? 'Price currently unavailabe'}} </li>
        <li>Trip Coordinator: {{ $trip->tripCoordinator->name }} </li>
    </ul>
@endsection