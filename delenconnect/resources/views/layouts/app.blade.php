<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Delen-connect') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Source+Sans+Pro" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../img/apple-touch-icon.png"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav>
            <img src="../img/logo_delen.svg" alt="Logo">
            @guest
            @else
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endguest
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
<script>
    function showRemarkForm() {
        document.getElementById("remarkform").classList.remove("hide");
    }
    function hideRemarkForm() {
        document.getElementById("remarkform").classList.add("hide");
    }
</script>
</body>
</html>
