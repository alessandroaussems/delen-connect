<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Source+Sans+Pro" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../img/apple-touch-icon.png"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <main>
        <div class="container-login">
            <img src="../img/logo_delen.svg" alt="Logo">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email">E-mail</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
                @endif
                <img src="../img/digicode.png" alt="Digicode">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="* * * *"><br>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

                {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><br>--}}

                {{--<label class="form-check-label" for="remember">--}}
                    {{--{{ __('Remember Me') }}--}}
                {{--</label>--}}
                <button type="submit" class="btn btn-primary">
                    Aanmelden
                </button>
            </form>
        </div>
    </main>
</div>
</body>
</html>
