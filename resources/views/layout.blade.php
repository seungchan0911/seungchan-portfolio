<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>seungchan</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.png') }}" type="image/x-icon">
    @if (Route::currentRouteName() === 'home')
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @elseif (Route::currentRouteName() === 'works')
        <link rel="stylesheet" href="{{ asset('css/works.css') }}">
    @elseif (Route::currentRouteName() === 'contact')
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    @elseif (Route::currentRouteName() === 'admin' || Route::currentRouteName() === 'login' || Route::currentRouteName() === 'read')
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @endif
</head>
<body>
    <div class="container">
        <x-layout.header />
        <main>
            @yield('content')
        </main>
        <x-layout.footer />
    </div>
</body>
<script src="{{ asset('js/main.js') }}"></script>
</html>
