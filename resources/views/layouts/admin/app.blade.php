<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        window.addEventListener('load',()=>{

            if (localStorage.getItem('theme') == 'dark') {
                var element = document.querySelector('body');
                element.classList.replace('light-skin','dark-skin');
            }
        })

    </script>
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

    <script src="js/admin/pages/chat-popup.js"></script>
    <script src="js/admin/vendor/feather.js"></script>

    <script src="js/admin/vendor/apexcharts.js"></script>
    <script src="js/admin/vendor/moment.js"></script>
    <script src="js/admin/vendor/fullcalendar.js"></script>

    <!-- Joblly App -->
    <script src="js/admin/template.js"></script>
    <script src="js/admin/pages/calendar-dash.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous"></script>


    @stack('modals')

    <script>
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

    </script>
    @include('partials.alerts')

    @stack('js')

</body>

</html>
