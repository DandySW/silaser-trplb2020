<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Judul -->
    @yield('title')

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/icon-font.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Modernizer JS -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- Form -->
    <link rel="stylesheet" type="text/css" href="/form/css/util.css">
    <link rel="stylesheet" type="text/css" href="/form/css/main.css">

</head>

<body>

    <!-- Header Section Start -->
    <div class="header-section section">

        <!-- Header Top Start -->
        <div class="header-top header-top-three bg-ivory pt-10 pb-10">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    @yield('header auth')

                </div>
            </div>
        </div><!-- Header Top End -->

        <!-- Header Bottom Start -->
        <div class="header-bottom header-bottom-three header-sticky">
            <div class="container">
                <div class="row align-items-center">

                    @yield('header-menu')

                    <div class="col-lg-2 order-1 order-lg-2 order-xl-2 d-flex justify-content-center mt-15 mb-15">
                        <!-- Logo Start -->
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="/assets/images/logo.png" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                                <img class="theme-dark" src="/assets/images/logo-light.png" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                            </a>
                        </div><!-- Logo End -->
                    </div>

                    <div class="col-lg-5 order-2 order-lg-3 order-xl-3">
                        <!-- Header Advance Search Start -->
                        <div class="header-advance-search">

                            <form action="#">
                                <div class="input"><input type="text" placeholder="Cari produk yang diinginkan"></div>
                                <div class="submit"><button><i class="icofont icofont-search-alt-1"></i></button></div>
                            </form>

                        </div><!-- Header Advance Search End -->
                    </div>

                    <!-- Mobile Menu -->
                    <div class="mobile-menu order-12 d-block d-lg-none col"></div>

                </div>
            </div>
        </div><!-- Header BOttom End -->

    </div><!-- Header Section End -->

    @yield('content')
    <!-- ====================================== -->

    <!-- Brands Section Start -->
    <div class="brands-section section mb-90">
        <div class="container">
            <div class="row">
                <!-- Brand Slider Start -->
                <div class="brand-slider col">
                    <div class="brand-item col"><img src="/assets/images/brands/brand-1.png" alt="Brands">
                    </div>
                    <div class="brand-item col"><img src="/assets/images/brands/brand-2.png" alt="Brands">
                    </div>
                    <div class="brand-item col"><img src="/assets/images/brands/brand-3.png" alt="Brands">
                    </div>
                    <div class="brand-item col"><img src="/assets/images/brands/brand-4.png" alt="Brands">
                    </div>
                    <div class="brand-item col"><img src="/assets/images/brands/brand-5.png" alt="Brands">
                    </div>
                </div><!-- Brand Slider End -->

            </div>
        </div>
    </div><!-- Brands Section End -->

    <!-- Footer Section Start -->
    <div class="footer-section section bg-ivory">

        <!-- Footer Top Section Start -->
        <div class="footer-top-section section pt-90 pb-50">
            <div class="container">

                <div class="row">

                    <!-- Footer Widget Start -->
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget">

                            <h4 class="widget-title">CONTACT INFO</h4>

                            <p class="contact-info">
                                <span>Address</span>
                                You address will be here <br>
                                Lorem Ipsum text </p>

                            <p class="contact-info">
                                <span>Phone</span>
                                <a href="tel:01234567890">01234 567 890</a>
                                <a href="tel:01234567891">01234 567 891</a>
                            </p>

                            <p class="contact-info">
                                <span>Web</span>
                                <a href="mailto:info@example.com">info@example.com</a>
                                <a href="#">www.example.com</a>
                            </p>

                        </div>
                    </div><!-- Footer Widget End -->

                    <!-- Footer Widget Start -->
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget">

                            <h4 class="widget-title">CUSTOMER CARE</h4>

                            <ul class="link-widget">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Cart</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                        </div>
                    </div><!-- Footer Widget End -->

                </div>
            </div>
        </div><!-- Footer Bottom Section Start -->

        <!-- Footer Bottom Section Start -->
        <div class="footer-bottom-section section">
            <div class="container">
                <div class="row">

                    <!-- Footer Copyright -->
                    <div class="col-lg-6 col-12">
                        <div class="footer-copyright">
                            <p>Teknik Rekayasa Perangkat Lunak B kelompok H 2020 | <a href="#">SILASER</a></p>
                        </div>
                    </div>
                    <!-- Footer Section End -->

                    <!-- Footer Social Media -->
                    <div class="col-lg-6 col-12">
                        <div class="footer-social-media">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-google"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div><!-- Footer Section End -->


                <!-- jQuery JS -->
                <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
                <!-- Popper JS -->
                <script src="/assets/js/popper.min.js"></script>
                <!-- Bootstrap JS -->
                <script src="/assets/js/bootstrap.min.js"></script>
                <!-- Plugins JS -->
                <script src="/assets/js/plugins.js"></script>
                <!-- Ajax Mail -->
                <script src="/assets/js/ajax-mail.js"></script>
                <!-- Main JS -->
                <script src="/assets/js/main.js"></script>
</body>

</html>