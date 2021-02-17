<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tradee</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->


    <link rel="stylesheet" href="{{mix('css/user/app.css')}}">
</head>

<body class="dashboard">

    @include('partials.user.preloader')

    <div id="main-wrapper">
        @include('partials.user.dashboard.header')
        @include('partials.user.dashboard.sidebar')

        @yield('content')
    </div>
    @yield('modals')
    <script src="{{ mix('js/user/app.js') }}"></script>
</body>

</html>