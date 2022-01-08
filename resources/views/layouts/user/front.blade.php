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
        <script>
            function fetchUser() {
                $.ajax({
                    url: 'https://randomuser.me/api/',
                    dataType: 'json',
                    success: res => showToast(res.results[0])
                });
            }

            function showToast(data){
                let amount = randomNumber(randomNumber(1000,100000), 50);
                iziToast.show({
                    title: `$${formatThousand(amount)}`,
                    message: `${randomAction()} by <strong> ${data.name.first} ${data.name.last} </strong>`,
                    position: 'bottomCenter',
                    timeout: 5000
                });
            }

            function formatThousand(num){
                var num_parts = num.toString().split('.');
                num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                return num_parts.join('.');
            }

            function randomNumber(min, max){
                return Math.floor(Math.random() * (max - min) ) + min;
            }

            function randomAction(){
                const actions = ['Invested', 'Withdrawal'];
                return actions[Math.floor(randomNumber(0,actions.length)) - 0]
            }
            setInterval(fetchUser, 20000);

        </script>
    </body>


</html>
