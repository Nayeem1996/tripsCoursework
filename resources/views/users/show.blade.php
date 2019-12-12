@extends('layouts.app')

@section('title', 'User Details')

@section ('content')
    <ul>
        <li>User ID: {{ $user->id }} </li>
        <li>User Name: {{ $user->name }} </li>
        <li>User email: {{ $user->email }} </li>
        <li>User admin status: {{ $user->is_admin }} </li>
        <li>User email verified: {{ $user->email_verified_at ?? 'Email has not been verified yet'}} </li>
    </ul>
@endsection