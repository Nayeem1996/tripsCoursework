@extends('layouts.app')

@section('title', 'Trip Coordinator Details')

@section ('content')
    <ul>
        <li>User ID: {{ $tripcoordinator->id }} </li>
        <li>User Name: {{ $tripcoordinator->name }} </li>
        <li>User email: {{ $tripcoordinator->email }} </li>
        <li>User email verified: {{ $tripcoordinator->email_verified_at ?? 'Email has not been verified yet'}} </li>
        <li>User email: {{ $tripcoordinator->employment_start_date }} </li>
    </ul>
@endsection