@extends('layouts.app')

@section('title', 'Trip Coordinators')

@section('content')
    <p>Trip coordinators: </p>
    <ul>
        @foreach ($tripCoordinators as $tripcoordinator)

            <li><a href="{{ route('tripcoordinators.show', ['id' => $tripcoordinator->id]) }}">{{ $tripcoordinator->name}} </a></li>

        @endforeach
    </ul>
    <div class="row">
        <div class="col-12 d-flex justify-content-center pt-4">
            {{ $tripCoordinators->links() }}
        </div>
    </div>
@endsection
