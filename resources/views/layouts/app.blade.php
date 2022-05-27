<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Market')</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">

        @include('layouts.navbar')

        <main class="py-4">
            @yield('content')
        </main>

    </div>
                    
    <!-- jquery -->
    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('js/bootstrap-5.1.0.min.js')}}"></script>

</body>
</html>
