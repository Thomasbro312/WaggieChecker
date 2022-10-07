<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{env('app_name')}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

</head>
<body class="d-flex flex-column min-vh-100">
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{route('homepage')}}" class="logo d-flex align-items-center">
            <h1>WaggieChecker<span>.</span></h1>
        </a>
        <nav id="nav" class="navbar">
            <ul>
                <li><a href="{{route('homepage')}}">Hoofdpagina.</a></li>
                <li><a href="{{route('aanbod')}}">Alle autos.</a></li>
                <li><a href="{{route('aboutus')}}">Over ons.</a></li>
                <li><a href="{{route('contact')}}">Contact.</a></li>
                @if(Auth::user() != null)
                    <li><a href="{{route('contact')}}">Account.</a></li>
                @else
                    <li><a href="{{route('login')}}">Inloggen.</a></li>
                @endif
            </ul>
        </nav>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>

@yield('content')

<footer id="footer" class="footer mt-auto">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span>WaggieChecker</span>
                </a>
                <p>Jouw platform om je auto te verkopen!</p>
                <div class="social-links d-flex mt-4">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100075864498068" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/devbyteeu/" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="copyright">
            &copy; Copyright <strong><span>WaggieChecker</span></strong>.
        </div>
        <div class="credits">
            Made by <a href="https://devbyte.eu">Devbyte</a>
        </div>
    </div>

</footer><!-- End Footer -->

<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js"')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
