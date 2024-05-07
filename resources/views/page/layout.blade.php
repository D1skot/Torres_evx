<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Torrex EVX</title>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <link href="{{ asset('css/app.css') }}?{{ date('YmdHis') }}" rel="stylesheet">
</head>

<body>
    @yield('content')
</body>
<script src="{{ asset('js/app.js') }}?{{ date('YmdHis') }}"></script>
</html>
