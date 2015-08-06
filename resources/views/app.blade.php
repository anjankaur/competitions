<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Whizzspace is an online talent platform where people can showcase their skills and compete to win fame and fortune."/>

    <title>@yield('title',  'Whizzspace')</title>

    <meta name="csrf_token" content="{{ csrf_token() }}"/>

    <meta name='copyright' content='Whizzspace'>
    <meta name='language' content='EN'>
    <meta name='robots' content='index,follow'>
    <meta name='Classification' content='Business'>
    <meta name='designer' content='Breve Labs, hello@brevelabs.com'>
    <meta name='reply-to' content='hello@whizzspace.com'>
    <meta name='owner' content='Whizzspace'>
    <meta name='url' content='http://whizzspace.com'>
    <meta name='identifier-URL' content='http://whizzspace.com'>
    <meta name='coverage' content='Worldwide'>
    <meta name='distribution' content='Global'>
    <meta name='rating' content='General'>
    <meta name='revisit-after' content='7 days'>
    <meta name='target' content='all'>
    <meta name='HandheldFriendly' content='True'>
    <meta name='MobileOptimized' content='320'>

    <!-- Open Graph Tags -->

    <meta property="article:author" content="https://www.facebook.com/whizzspace" />
    <meta property="article:publisher" content="https://www.facebook.com/whizzspace" />

    <meta property="og:email" content="hello@whizzspace.com"/>
    {{--<meta property="og:phone_number" content="+91-801080091"/>--}}

    @yield('meta')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    @yield('styles')
    <link rel="stylesheet" href="http://brevelabs.com/css/badge.css">

    <script src="{{ asset('javascript/jquery.min.js') }}"></script>
    <script src="{{ asset('javascript/jquery.jcarousel.min.js') }}"></script>

    @yield('head')
    @yield('head.scripts')
</head>
<body>

@include('header')

@include('notifications')

<div id="content-wrapper">
    @if(isset($content)) {!! $content !!} @else @yield('content') @endif
</div>

@include('footer')

<script src="{{ asset('javascript/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/javascript/app.js') }}"></script>
<script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
@yield('scripts')
<script>
    var $buoop = {c: 2};
    function $buo_f() {
        var e = document.createElement("script");
        e.src = "//browser-update.org/update.min.js";
        document.body.appendChild(e);
    }

    try {
        document.addEventListener("DOMContentLoaded", $buo_f, false)
    }
    catch (e) {
        window.attachEvent("onload", $buo_f)
    };
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>
</html>
