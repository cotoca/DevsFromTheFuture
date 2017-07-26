<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{{ asset('images/logo.jpg') }}">
    <meta property="og:type" content="Tecnologia">
    <meta property="og:title" content="Está preparado para ser um dev no mundo de amanhã?">
    <meta property="og:description" content="Se inscreva para receber conteúdos exclusivos vindos direto do futuro!">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>< Devs From The Future ></title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
    @section('head')
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    @show
</head>
<body>
<nav class="navbar">
    <div class="bring-from-right">
        <div class="col-sm-12 col-md-3">
            <img src="{{ asset('images/logo-04.png') }}" alt="Devs FTF" width="230" class="" style="margin-bottom: -30px;margin-top: -10px;">
        </div>
        <div class="col-sm-12 col-md-offset-4 col-md-5 navbar-links">
            <ul>
                <li><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link" href="{{ route('diversity.index', ['slug' => 'slug-da-news']) }}">Diversidade</a></li>
                <li><a class="nav-link" href="{{ route('tendencies.index', ['slug' => '5-fatos-do-futuro-que-todo-desenvolvedor-deve-saber']) }}">Tendências</a></li>
                <li><a class="nav-link" href="{{ route('skills.index', ['slug' => '6-habilidades-que-as-startups-procuram-em-seus-desenvolvedores-fora-a-tecnica']) }}">Habilidades</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-2"></div>
    </div>
</nav>

<div class="blog-content m-b-15">
    @yield('content')
</div>

<div class="m-t-15 m-b-15 center">
    <div class="col-lg-12">
        &#9400; 2017 Devs From The Future, ALL RIGHTS RESERVED
    </div>
</div>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    
    ga('create', 'UA-103036352-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>