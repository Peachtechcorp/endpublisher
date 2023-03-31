<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>END Vision Publishers Limited Company</title>
    <!-- <meta name="robots" content="noindex, follow" /> -->
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.webp" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <link rel="stylesheet" href="{{ asset('css/vendor/icofont.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('css/vendor/line-awesome.min.css') }} " />
    <link rel="stylesheet" href="{{ asset('css/vendor/simple-line-icons.css') }} " />
    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS (Bootstrap & Icon Font) -->

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="{{ asset('css/plugins/swiper-bundle.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/plugins/magnific-popup.css') }}" />


    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>


<body class="font-poppins text-dark text-sm leading-loose">

    <x-web.layouts.header />


    <main class="py-4">
        @yield('content')
    </main>


    <x-web.layouts.footer />


    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="{{ asset('js/vendor/modernizr-3.11.7.min.js') }} "></script>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }} "></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.3.2.min.js') }} "></script>
    <!-- Plugins JS -->
    <script src="{{ asset('js/plugins/swiper-bundle.min.js') }} "></script>
    <script src="{{ asset('js/plugins/popper.min.js') }} "></script>
    <script src="{{ asset('js/plugins/tippy-bundle.umd.min.js') }} "></script>
    <script src="{{ asset('js/plugins/jquery.magnific-popup.min.js') }} "></script>
    <script src="{{ asset('js/plugins/jquery.ajaxchimp.min.js') }} "></script>

    <!-- Activation JS -->
    <script src="{{ asset('js/main.js') }} "></script>



</body>

</html>
