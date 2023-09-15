<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="highclove is a UK-based investment manager with offices in USA, Canada and Switzerland. We are a dynamic group whose main focus is to provide our clients with the best possible service">
    <meta name="keywords"
        content="highclove, managed investments, investment, crypto investment, btc, eth, ">
    <meta name="author" content="">
    <title> {{ $compd ? $compd->companyname : 'company name' }} | Smartly Managed Investments.</title>
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.jpg') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="/">
                            <img class="logo-dark" src="frontend/assets/img/logo11.png" width="170" srcset=""
                                alt="" />
                            <img class="logo-light" width="170" src="frontend/assets/img/logo11.png"
                                srcset="" alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">highclove</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">ABOUT</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/#" data-bs-toggle="dropdown">SERVICES</a>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('cryptoplans') }}">CRYPTOCURRENCY</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('forexplans') }}">FOREX TRADING</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('realestate') }}">REAL ESTAE</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                                </li>
                                
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"
                                        class="link-inverse">{{ $compd ? $compd->companyemail : 'company email' }}</a>
                                    <br /> <a href="tel:{{ $compd ? $compd->companynumber : 'company number' }}">{{ $compd ? $compd->companynumber : 'company number' }}</a><br />
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->



    @yield('body')




    <!-- footer section -->




    <footer class="bg-dark text-inverse">
        <div class="container py-13 py-md-14">
            <div class=""></div>
            <div class="row ">
                <div class="col-md-5">
                    <div class="widget">
                        <img class="mb-4" src="frontend/assets/img/logo11.png" width="200" alt="" />
                        <p class="mb-4">highclove is a UK-based investment manager with offices in USA, Canada and
                            Switzerland. We are a dynamic group whose
                            main focus is to provide our clients with the best possible service, by applying a
                            systematic
                            and quantitative approach
                            to investment management, with the aim of generating high-quality and diversifying alpha
                            for our
                            clients’ portfolios.</p>

                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <!-- /column -->
                <div class="col-md-3 mb-4">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-4">Learn More</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}">Support</a></li>
                            <li><a href="{{ route('terms') }}">Terms and condition</a></li>
                            <li><a href="/#">FAQ</a></li>
                            <li><a href="/#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Location:
                            3580 Logan Lane, Colorado.
                        </address>
                        <a href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"> Mail: {{ $compd ? $compd->companyemail : 'company name' }}</a><br />

                        <span><a href="tel:{{ $compd ? $compd->companyphone : 'company phone' }}">Phone: {{ $compd ? $compd->companyphone: 'company phone' }}</a></span>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <hr class="my-8" />
                <div class="col-md-12 text-center">
                    <span class="">© <span id="date"></span> {{ $compd ? $compd->companyname : 'company name' }} Finance. All rights reserved.</span>
                </div>
            </div>
            <!--/.row -->

        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="//code.tidio.co/l0ebboglc1bmpwkrjpxagheaunxjdb0p.js" async></script>
    <script>
        const currentDate = new Date();
        const fullYear = currentDate.getFullYear();

        const dateElement = document.getElementById("date");
        dateElement.innerText = fullYear;
    </script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>
</body>


</html>