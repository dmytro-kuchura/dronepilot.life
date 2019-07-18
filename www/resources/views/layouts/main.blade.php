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
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- Mobile Specific Metas ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}"/>

    <!-- canonical -->
    <link rel="canonical" href="{{ url(Request::url()) }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140910657-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-140910657-1');
    </script>
</head>
<body>
<div class="se-pre-con"></div>
<div class="main">

    <!-- HEADER START -->
    @widget('Header')
    <!-- HEADER END -->

    <!-- Breadcrumbs START -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Blog</h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="index.html">Home</a>/</li>
                        <li><span>Blog</span></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Breadcrumbs END -->

    <!-- CONTAIN START -->
    <section class="ptb-70">
        <div class="container">
            @yield('content')
        </div>
    </section>
    <!-- CONTAINER END -->

    <!-- FOOTER START -->
    @widget('Footer')
    <!-- FOOTER END -->
</div>
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
