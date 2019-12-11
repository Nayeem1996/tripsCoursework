@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <p>User accounts: </p>
    <ul>
        @foreach ($users as $user)

            <li><a href="{{ route('users.show', ['id' => $user->id]) }}">{{ $user->name}} </a></li>
            {{-- <li>{{ $user->name}}</li> --}}

        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center"></div>
                {{ $users->links() }}
        </div>
    </ul>
@endsection
