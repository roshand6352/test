<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Greatjob - @yield('title')</title>
    <meta name="description"
          content="At Greatjob, we connect you with local reliable providers who are ready to lend a helping hand. Earn money doing Greatjobs.">
    <meta name="keywords" content="Earn, money, doing, Greatjobs, greatjob, providers, washing, lawn">
    <meta name="author" content="greatjob">
    <meta name="author" content="greatjob">
    <meta property="og:title" content="Great Job - Home">
    <meta property="og:description"
          content="At Greatjob, we connect you with local reliable providers who are ready to lend a helping hand. Earn money doing Greatjobs.">
    <meta property="og:image" content="images/slider-1.jpg">
    <meta property="og:url" content="https://great-job.projectdemo.click/index.html">

    <link rel="icon" type="image/png" href="{{asset('assets/web/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/web/images/favicon.png')}}"/>
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/web/images/favicon-72x72.png')}}"/>
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/web/images/favicon-114x114.png')}}"/>
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/web/images/favicon-144x144.png')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    @include('web.layouts.css')
</head>
<body>
<header>
    @include('web.layouts.nav')
</header>
@yield('content')
@include('web.layouts.footer')
@include('web.layouts.script')
</body>
</html>
