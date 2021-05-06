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
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6093d457185beb22b30aa672/1f50naugf';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script>
    <!--End of Tawk.to Script-->
    @stack('js')
</body>


</html>
