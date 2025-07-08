<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="The 8th ICoFA 2025 is an international conference on Food and Agriculture hosted by Politeknik Negeri Jember. Join global experts in agriculture, food, energy, and animal sciences.">
    <title>8th ICoFA 2025 - International Conference on Food and Agriculture</title>

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('assets/img/icofa_7th_icon.png') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

    @include('landing.partials.navbar')

    @yield('content')

    @include('landing.partials.footer')

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            AOS.init({
                disable: true
            });
        } else {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            });
        }

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-custom');
            navbar.classList.toggle('scrolled', window.scrollY > 100);
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Auto-close navbar on mobile
        document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
            link.addEventListener('click', function() {
                const navbarToggler = document.querySelector('.navbar-toggler');
                if (navbarToggler && window.getComputedStyle(navbarToggler).display !== 'none') {
                    navbarToggler.click();
                }
            });
        });
    </script>
</body>

</html>
