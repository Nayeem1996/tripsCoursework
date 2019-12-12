<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

@if ($errors->any())
    <div>
        Errors:
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('message'))
    <p><b>{{ session('message') }}</b></p>
@endif

<html lang = "en">
    <head>
        <title>Trips - @yield('title')</title>
    </head>
    <body>
        <h1>Trips - @yield('title')</h1>

        <div>
            @yield('content')
        </div>

    </body>
</html>