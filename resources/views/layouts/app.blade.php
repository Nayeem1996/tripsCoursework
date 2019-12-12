<!doctype html>

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