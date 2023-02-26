<!DOCTYPE html>
<html lang="es">
<head>
    <title>GRITASTIC DESIGN</title>
    <meta charset="UTF-8">
    <meta name="description" content="Gritastic design">
    <meta name="keywords" content="Perú, ecommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="/img/logo.png" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="/css/style.css"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @stack('css')
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

@include('partials.learning.navigation')

@yield('hero')

@component('components.alert-component')@endcomponent

@yield('content')




<!--====== Javascripts & Jquery ======-->
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/mixitup.min.js"></script>
<script src="/js/circle-progress.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/main.js"></script>
<script>
    let previousTitle = document.title;

    window.addEventListener('blur', () => {
        previousTitle = document.title;
        document.title = '¡No te vayas! ¡Vuelve 😔!';
    });

    window.addEventListener('focus', () => {
        document.title = previousTitle;
    });
</script>
@yield('scripts')
@stack('js')
@include('partials.learning.footer')
</body>
</html>
