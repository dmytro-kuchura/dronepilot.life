<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/react/app.js') }}" defer></script>
</head>

<body class="sb-nav-fixed">
<div id="app"></div>

<!-- Styles -->
<link href="{{ asset('css/react/app.css') }}" rel="stylesheet">
</body>

</html>
