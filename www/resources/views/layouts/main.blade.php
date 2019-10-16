<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>
    <!-- SEO Meta ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:image" content="{{ asset('/logo-drone-pilot.png') }}"/>
    <meta property="og:url" content="{{ url(Request::url()) }}"/>
    <meta property="og:site_name" content="DronePilot"/>

    <meta itemprop="name" content="@yield('title')"/>
    <meta itemprop="description" content="@yield('description')"/>
    <meta itemprop="image" content="{{ asset('/logo-drone-pilot.png') }}"/>

    <meta name="site-created" content="2019/01/15">

    <meta name="distribution" content="global">
    <meta name="revisit-after" content="5 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="general">
    <meta name="Language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Mobile Specific Metas ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}"/>

    <!-- sitemap.xml -->
    <link href='{{ url('sitemap.xml') }}' rel='alternate' title='Sitemap' type='application/rss+xml'/>
    <!-- canonical -->
    <link rel="canonical" href="{{ url(Request::url()) }}" />
    <!-- csrf-token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    @if(config('app.env') !== 'local')
        <script data-ad-client="ca-pub-3428447687354562" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    @endif

    @if(config('app.env') !== 'local')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140910657-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-140910657-1');
        </script>
    @endif
</head>
<body>
<div class="se-pre-con"></div>
<div class="main" id="app">
    <!-- HEADER START -->
    @widget('Header')
    <!-- HEADER END -->

    <!-- Breadcrumbs START -->
    @widget('Breadcrumbs')
    <!-- Breadcrumbs END -->

    <!-- CONTAIN START -->
    @yield('content')
    <!-- CONTAINER END -->

    <!-- FOOTER START -->
    @widget('Footer')
    <!-- FOOTER END -->
</div>
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
