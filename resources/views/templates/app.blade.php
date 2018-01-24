<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Perfect World Server </title>

    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    {!! Html::style('css/account.css') !!}
    {{--{!! Html::style('css/style.min.css') !!}--}}
    @stack('styles')
</head>
<body>
<div class="container-loader" style="display: none">
    <div class="loader">Loading...</div>
</div>

<div class="wrapper" id="teste">
    {{--@include('elements._header')--}}
    <br></br>
    @yield('content')
</div>

@include('elements._footer')
{!! Html::script('js/jquery-3.2.1.min.js') !!}
{!! Html::script('https://unpkg.com/sweetalert/dist/sweetalert.min.js') !!}
{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}
{!! Html::script('https://www.google.com/recaptcha/api.js') !!}
{{--{!! Html::script('js/main.js') !!}--}}
@stack('scripts')
</body>
</html>