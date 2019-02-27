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
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- style -->
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- font-awesome -->
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- font-awesome -->
    <link href="css/effects/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/effects/component.css" rel="stylesheet" type="text/css">
</head>
<body>

@widget('Header')

<main role="main-inner-wrapper" class="container">
    @yield('content')
</main>

@widget('Footer')

</body>
</html>
