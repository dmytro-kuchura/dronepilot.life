<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta charset="utf-8">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- style -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- style -->
    <!-- bootstrap -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- responsive -->
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- font-awesome -->
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- font-awesome -->
    <link href="{{ asset('/css/effects/set2.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/effects/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/effects/component.css') }}"  rel="stylesheet" type="text/css" >
</head>
<body>

@widget('Header')

<main role="main-inner-wrapper" class="container">
    @yield('content')
</main>

@widget('Footer')
</body>
</html>
