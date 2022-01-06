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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <x-live-chat />
        <!--End of Tawk.to Script-->
        @stack('js')
        <style>

        </style>
    </body>


</html>
