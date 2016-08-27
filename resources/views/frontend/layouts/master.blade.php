<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="author"      content="@yield('meta_author', 'Tangem')">
    @yield('meta')
    <title>@yield('title',app_name())</title>

    @yield('before-styles-end')
    <link rel="shortcut icon" href="{{ asset('images/gt_favicon.png') }}">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" media="screen" >
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('after-styles-end')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body class="home">
    @include('frontend.includes.header')
    @yield('content')
    @include('frontend.includes.footer')


    @yield('before-scripts-end')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/headroom.min.js') }}"></script>
    <script src="{{ asset('js/jQuery.headroom.min.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    @yield('after-scripts-end')


</body>
</html>