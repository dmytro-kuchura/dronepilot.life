<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta charset="utf-8">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- style -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

@widget('Header')

<main role="main-inner-wrapper" class="container">
    @yield('content')
</main>

@widget('Footer')
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
