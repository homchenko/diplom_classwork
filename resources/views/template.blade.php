<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Главная страница - Техномарт</title>
    <meta name="description" content="интернет магазин строительных материалов и инструментов для ремонта">
    <meta name="keywords" content="материалы, инструменты, техника, перфораторы, дрели, bosch, makita, dewalt, интерскол, hitachi, lg, aeg, metabo">
    <link href="http://fonts.googleapis.com/css?family=Cuprum:400,400italic,700,700italic&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}" type="text/css">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/ico">
</head>

<body>
<header class="header-panel header-main">
    @include('front.partials.header')
</header>
    @yield('content')
<footer>
    @include('front.partials.footer')
</footer>
    @include('front.partials.notifications')

<script src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false">
</script>

<script src="{{ asset('js/script.min.js') }}"></script>
</body>

</html>