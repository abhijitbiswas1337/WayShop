<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>WayShop @yield('title')</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/css/app.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href='{{asset('/Assets/Admin/assets/img/favicon.ico')}}' />
</head>
<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('Administrator.layouts.header')
        @include('Administrator.layouts.sidebar')
        <!-- Main Content -->
        @yield('content')
        @include('sweetalert::alert')
       @include('Administrator.layouts.footer')
    </div>
</div>
<!-- General JS Scripts -->
<script src="{{asset('/Assets/Admin/assets/js/app.min.js')}}"></script>
<!-- JS Libraies -->
<script src="{{asset('/Assets/Admin/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('/Assets/Admin/assets/bundles/amcharts4/core.js')}}"></script>
<script src="{{asset('/Assets/Admin/assets/bundles/amcharts4/charts.js')}}"></script>
<script src="{{asset('/Assets/Admin/assets/bundles/amcharts4/animated.js')}}"></script>
<script src="{{asset('/Assets/Admin/assets/bundles/jquery.sparkline.min.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{asset('/Assets/Admin/assets/js/page/index.js')}}"></script>
<!-- Template JS File -->
<script src="{{asset('/Assets/Admin/assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{asset('/Assets/Admin/assets/js/custom.js')}}"></script>
</body>
</html>
