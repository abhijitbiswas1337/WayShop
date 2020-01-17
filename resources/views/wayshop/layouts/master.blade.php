<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ThewayShop @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('/Assets/homepage/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('/Assets/homepage/images/apple-touch-icon.png')}}">
    <link rel="stylesheet" href="{{asset('/Assets/homepage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/Assets/homepage/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/Assets/homepage/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('/Assets/homepage/css/custom.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="{{asset('/Assets/homepage/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('/Assets/homepage/js/popper.min.js')}}"></script>
</head>
<body>
@include('wayshop.layouts.header')
@yield('content')
@include('wayshop.layouts.footer')

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->

<script src="{{asset('/Assets/homepage/js/bootstrap.min.js')}}"></script>
<!-- ALL PLUGINS -->
<script src="{{asset('/Assets/homepage/js/jquery.superslides.min.js')}}"></script>
<script src="{{asset('/Assets/homepage/js/bootstrap-select.js')}}"></script>
<script src="{{asset('/Assets/homepage/js/inewsticker.js')}}"></script>
<script src="{{asset('/Assets/homepage/js/bootsnav.js')}}"></script>
<script src="{{asset('/Assets/homepage/js/images-loded.min.js')}}"></script>
<script src="{{asset('/Assets/homepage/js/isotope.min.js')}}"></script>
<script src="{{asset('/Assets/homepage/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('/Assets/homepage/js/baguetteBox.min.js')}}"></script>
<script src="{{asset('/Assets/homepage/js/form-validator.min.js')}}"></script>
<script src="{{asset('/Assets/homepage/js/contact-form-script.js')}}"></script>
<script src="{{asset('/Assets/homepage/js/custom.js')}}"></script>
</body>
</html>
