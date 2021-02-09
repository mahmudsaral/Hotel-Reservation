<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Mahmut Saral">
    <title>@yield('title')</title>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets')}}/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets')}}/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets')}}/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets')}}/images/favicon.ico">
    <link rel="shortcut icon" href="{{ asset('assets')}}/images/favicon.ico">
    <!-- Bootstrap -->
    <link href="{{ asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="{{ asset('assets')}}/css/font-awesome.css" rel="stylesheet">
    <!-- Flaticons -->
    <link href="{{ asset('assets')}}/css/font/flaticon.css" rel="stylesheet">
    <!-- Slick Slider -->
    <link href="{{ asset('assets')}}/css/slick.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="{{ asset('assets')}}/css/ion.rangeSlider.min.css" rel="stylesheet">
    <!-- Datepicker -->
    <link href="{{ asset('assets')}}/css/datepicker.css" rel="stylesheet">
    <!-- magnific popup -->
    <link href="{{ asset('assets')}}/css/magnific-popup.css" rel="stylesheet">
    <!-- Nice Select -->
    <link href="{{ asset('assets')}}/css/nice-select.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('assets')}}/css/style.css" rel="stylesheet">
    <!-- Custom Responsive -->
    <link href="{{ asset('assets')}}/css/responsive.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/css/ie.css" />
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
    <!-- place -->
    @yield('css')
    @yield('headerjs')
</head>
<body>
@include('home._header')
@include('home._menu')
@include('home._slider')

<section class="main-content-wrapper section_padding_100">
    <div class="container">


        @include('home._banner')
        @include('home._start')

    </div>
    </div>
</section>


@include('home._footer')
@yield('footerjs')
</body>
</html>
