<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>8th International Conference on Food and Agriculture 2025</title>
    <meta content="8th International Conference on Food and Agriculture 2025" name="description">
    <meta content="icofa-2025" name="keywords">
    <meta name="theme-color" content="#589981">
    {{-- @if (request()->input('page') == '')
        <meta property="og:title" content="{{ strip_tags($config['conference']->alias) }}">
        <meta property="og:description" content="">
        <meta property="og:image" content="{{ url(asset('assets/img/' . $config['conference']->logo_icon)) }}">
        <meta property="og:url" content="{{ url('/') }}">
    @else
        <meta property="og:title" content="{{ strip_tags($page['title']) }}">
        <meta property="og:description" content="This is content of Page Entitle {{ $page['title'] }}">
        <meta property="og:image" content="{{ url(asset('assets/img/' . $config['conference']->logo_icon)) }}">
        <meta property="og:url" content="{{ request()->fullUrl() }}">
    @endif --}}

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('assets/img/icofa_8th_icon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/icofa_8th_icon.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Signika:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/timeline.css') }}" rel="stylesheet">

    <!-- =======================================================
 * Template Name: QuickStart
 * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
 * Updated: Jun 06 2024 with Bootstrap v5.3.3
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 ======================================================== -->
</head>

<body class="index-page">

    @include('landing.partials.header')

    <main class="main">

        @yield('content')

    </main>

    @include('landing.partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/countdown/countdown.jquery.js') }}"></script>
    <script>
        $('#countdown').countdown({
            year: 2025, // YYYY Format
            month: 7, // 1-12
            day: 10, // 1-31
            hour: 10, // 24 hour format 0-23
            minute: 0, // 0-59
            second: 0, // 0-59
            timezone: +7,
        });
    </script>
</body>

</html>
