<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>



    @vite('resources/js/app.js')
    @inertiaHead

    <!--plugins-->
    @yield("style")
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png"/>
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet"/>
    <script src="assets/js/pace.min.js"></script>
    <!--<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">


    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css"/>
    <link rel="stylesheet" href="assets/css/semi-dark.css"/>
    <link rel="stylesheet" href="assets/css/header-colors.css"/>
    <title>Rocker - Laravel 10 & Bootstrap 5 Admin Dashboard Template</title>
    @routes

</head>
<body>
<div class="wrapper">

    @include("layouts.partials.header")

    @include("layouts.partials.nav")

{{--    @yield("wrapper")--}}
    <div class="page-wrapper">
        @inertia
    </div>
    <div class="overlay toggle-icon"></div>

    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

    <footer class="page-footer">
        <p class="mb-0">Copyright © {{ date("Y") }}. All right reserved.</p>
    </footer>

    @include('layouts.partials.configurations')
</div>


<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
