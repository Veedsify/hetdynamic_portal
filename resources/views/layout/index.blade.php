<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Hetdynamic </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="blazor bootstrap, c# blazor, admin panel, blazor c#, template dashboard, admin, bootstrap admin template, blazor, blazorbootstrap, bootstrap 5 templates, dashboard, dashboard template bootstrap, admin dashboard bootstrap.">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand-logos/desktop-white.png')}}" type="image/x-icon">

    <!-- Choices JS -->
    <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <!-- Main Theme Js -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('assets/css/styles.min.css')}}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="{{ asset('assets/libs/node-waves/waves.min.css')}}" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css')}}" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/libs/%40simonwep/pickr/themes/nano.min.css')}}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}">


</head>

<body>

    @yield('content')


        <!-- Popper JS -->
        <script src="{{ asset('assets/libs/%40popperjs/core/umd/popper.min.js')}}"></script>

        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Defaultmenu JS -->
        <script src="{{ asset('assets/js/defaultmenu.min.js')}}"></script>

        <!-- Node Waves JS-->
        <script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- Sticky JS -->
        <script src="{{ asset('assets/js/sticky.js')}}"></script>

        <!-- Simplebar JS -->
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/js/simplebar.js')}}"></script>

        <!-- Color Picker JS -->
        <script src="{{ asset('assets/libs/%40simonwep/pickr/pickr.es5.min.js')}}"></script>


        <!-- Apex Charts JS -->
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Ecommerce-Dashboard JS -->
        <script src="{{ asset('assets/js/ecommerce-dashboard.js')}}"></script>


        <!-- Custom-Switcher JS -->
        <script src="{{ asset('assets/js/custom-switcher.min.js')}}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('assets/js/custom.js')}}"></script>

    </body>

    </html>
