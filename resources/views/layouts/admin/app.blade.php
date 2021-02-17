<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/joblly-admin-template-dashboard/images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
        integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
        crossorigin="anonymous" />


    <title>@yield('title')</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="css/admin/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="css/admin/style.css">
    <link rel="stylesheet" href="css/admin/skin_color.css">
    @livewireStyles

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary">

    <div class="wrapper">
        <div id="loader"></div>
        @include('partials.admin.header')
        @include('partials.admin.sidebar')
        <div class="content-wrapper" style="height:100%; min-height: 100vh">
            @yield('content')
        </div>
        @include('partials.admin.footer')
    </div>

    @livewireScripts

    <script src="js/admin/vendors.min.js"></script>
    <script>
        $(window).on('load', function() {
            if (localStorage.getItem('theme') == 'dark') {
                // alert('lol');
                $('body').removeClass('light-skin').addClass('dark-skin')
            }
        })

    </script>
    <script src="js/admin/pages/chat-popup.js"></script>
    <script src="js/admin/vendor/feather.js"></script>

    <script src="js/admin/vendor/apexcharts.js"></script>
    <script src="js/admin/vendor/moment.js"></script>
    <script src="js/admin/vendor/fullcalendar.js"></script>

    <!-- Joblly App -->
    <script src="js/admin/template.js"></script>
    {{-- <script src="js/admin/pages/dashboard.js"></script> --}}
    <script src="js/admin/pages/calendar-dash.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous"></script>


    @include('partials.alerts')
    @stack('modals')

    <script>
        $(window).on('load', function() {
            var theme = localStorage.getItem('theme') || 'light';
            var el = $('.change-theme.' + theme);
            el.removeClass('d-none').siblings().addClass('d-none')
            $('body').removeClass(['dark-skin', 'light-skin']).addClass(theme + '-skin')

        })
        $(function() {
            $('.change-theme').on('click', function() {
                var el = $(this);
                el.addClass('d-none');
                el.siblings().removeClass('d-none')
                if (el.hasClass('dark')) {
                    $('body').removeClass('dark-skin').addClass('light-skin')
                    localStorage.setItem('theme', 'light')
                } else {
                    $('body').removeClass('light-skin').addClass('dark-skin')
                    localStorage.setItem('theme', 'dark')
                }
            })
        })
        window.livewire.on('toggle-modal', e => {
            $('#' + e.id).modal('toggle');
        })

        window.livewire.on('success', e => {
            successMessage(e.message);
        })


        window.livewire.on('error', e => {
            for (error in e.errors) {
                errorMessage(e.errors[error]);
            }
        })

        window.livewire.on('warn', e => {
            for (warn in e.warns) {
                errorMessage(e.warns[error]);
            }
        })

    </script>

    @stack('js')

</body>

</html>
