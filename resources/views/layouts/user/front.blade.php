<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ favicon() }}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ mix('css/user/app.css') }}">
    @stack('css')
    @livewireStyles
    @laravelPWA
</head>

<body class="@@dashboard">
    @include('partials.user.preloader')

    @yield('content')
    @livewireScripts
    @include('partials.alerts')
    <script src="{{ mix('js/user/app.js') }}"></script>
    <!--Start of Tawk.to Script-->
    <x-live-chat/>
    <!--End of Tawk.to Script-->
    @stack('js')
</body>


</html>
