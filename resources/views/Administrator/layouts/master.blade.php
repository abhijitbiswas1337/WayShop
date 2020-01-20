<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WayShop @yield('title')</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/css/app.min.css')}}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/css/custom.css')}}">
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('/Assets/Admin/assets/img/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/bundles/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/bundles/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/bundles/jquery-selectric/selectric.css')}}">
    <link rel="stylesheet" href="{{asset('/Assets/Admin/assets/bundles/pretty-checkbox/pretty-checkbox.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('/Assets/Admin/assets/js/app.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>



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

{{--<script src="{{asset('/Assets/Admin/assets/js/page/forms-advanced-forms.js')}}"></script>--}}
<!-- JS Libraies -->


<!-- Template JS File -->
<script src="{{asset('/Assets/Admin/assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{asset('/Assets/Admin/assets/js/custom.js')}}"></script>

<script src="{{asset('/Assets/Admin/assets/bundles/datatables/datatables.min.js')}}"></script>
<script src="{{asset('/Assets/Admin/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/Assets/Admin/assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{asset('/Assets/Admin/assets/js/page/datatables.js')}}"></script>
<script src='https://cdn.tiny.cloud/1/uc3s03ozbmzokmovjddmmc0neil7v0b6374mveta4zszxesl/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
<script src="{{asset('/Assets/Admin/assets/bundles/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{asset('/Assets/Admin/assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>

<script>
    tinymce.init({
        selector: '#description',
        height:'400px',
        plugins: 'a11ychecker advcode casechange formatpainter linkchecker lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinydrive tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter insertfile pageembed permanentpen table',
        toolbar_drawer: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
    });
</script>

</body>
</html>
