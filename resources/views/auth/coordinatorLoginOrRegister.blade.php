@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($url) ? ucwords($url) : ""}} {{ __('Login or register a new account') }}</div>

                <div class="card-body">
                    <div>
                        <a href="{{ route('login.coordinator') }}">Login to a coordinator account</a>
                    </div>
                    <div>
                        <a href="{{ route('register.coordinator') }}">Register a new coordinator account</a>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
