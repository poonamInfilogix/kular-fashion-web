
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kular Fashion</title>
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider/nouislider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery.countdown.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-demo-7.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-7.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('head')
    @yield('head')
</head>

<body>
    <div class="page-wrapper">
        @include('layouts.components.header')

        <main class="main">
            @yield('content')
        </main>

        @include('layouts.components.footer')
    </div>
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    @include('auth.login')

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/js/wNumb.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/demos/demo-7.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')

</body>

</html>