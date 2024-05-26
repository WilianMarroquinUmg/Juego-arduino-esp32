<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet"/>
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css"/>
    <link rel="stylesheet" href="assets/css/semi-dark.css"/>
    <link rel="stylesheet" href="assets/css/header-colors.css"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-login">

@yield('wrapper')


<script src="assets/js/bootstrap.bundle.min.js"></script>

<!--app JS-->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var showHidePassword = document.querySelector('#show_hide_password a');
        var passwordInput = document.querySelector('#show_hide_password input');
        var icon = document.querySelector('#show_hide_password i');

        showHidePassword.addEventListener('click', function(event) {
            event.preventDefault();
            if (passwordInput.type === 'text') {
                passwordInput.type = 'password';
                icon.classList.add('bx-hide');
                icon.classList.remove('bx-show');
            } else if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('bx-hide');
                icon.classList.add('bx-show');
            }
        });
    });
</script>


</body>
</html>
