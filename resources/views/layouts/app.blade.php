<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>END Vision Publisher</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>
<body class="">
    

    <main class="py-4">
        @yield('content')
    </main>


    {{-- <x-admin.layouts.footer /> --}}
            <!-- Vendor js -->
            <script src="{{ asset('admin/js/vendor.min.js')}}"></script>

            <!-- Chart JS -->
            <script src="{{ asset('admin/libs/chart-js/Chart.bundle.min.js')}}"></script>
    
            <!-- Sparkline charts -->
            <script src="{{ asset('admin/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    
            <!-- Dashboard js -->
            <script src="{{ asset('admin/js/pages/dashboard.init.js')}}"></script>
            
            <!-- App js -->
            <script src="{{ asset('admin/js/app.min.js')}}"></script>
</body>
</html>
