<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Perfect World X </title>
    <link rel="shortcut icon" href="http://www.l2-hunter.ru/images/favicon.png">
    {!! Html::style('js/watch.js', array('async' => '', 'type' => 'text/javascript')) !!}
    <link href="css/style.css" rel="stylesheet" media="all">
    {!! Html::script('js/watch.js', array('async' => '', 'type' => 'text/javascript')) !!}
    {!! Html::script('js/jquery.js') !!}
    {!! Html::script('js/image.js') !!}
    {!! Html::script('js/main.js') !!}
    {!! Html::script('js/jquery-latest.min.js') !!}
    {!! Html::script('js/jquery.tinycarousel.js') !!}
    {!! Html::script('js/countdown.js') !!}
    @stack('styles')'
</head>
<body>
@include('site_elements._header')
<div class="wrapper">
    @include('site_elements._header_code')
    @yield('content')
    @include('site_elements.bottom_code')
</div>

@include('site_elements._footer')

@stack('scripts')
</body>
</html>