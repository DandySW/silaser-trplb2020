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
    <link rel="shortcut icon" type="image/x-icon" href="pelanggan/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="pelanggan/css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="pelanggan/css/icon-font.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="pelanggan/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="pelanggan/css/style.css">

    <!-- Modernizer JS -->
    <script src="pelanggan/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!-- Header Section Start -->
    <div class="header-section section">

        <!-- Header Top Start -->
        <div class="header-top header-top-three bg-ivory pt-10 pb-10">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <!-- Header Auth -->
                    @yield('header auth')

                    <div class="col mt-10 mb-10">
                        <!-- Header Shop Links Start -->
                        <div class="header-shop-links">

                            <!-- Cart -->
                            <a href="cart.html" class="header-cart"><i class="ti-shopping-cart"></i> <span class="number">3</span></a>

                        </div><!-- Header Shop Links End -->
                    </div>

                </div>
            </div>
        </div><!-- Header Top End -->

        <!-- Header Bottom Start -->
        <div class="header-bottom header-bottom-three header-sticky">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 order-12 order-lg-1 order-xl-1 d-none d-lg-block">
                        <div class="main-menu menu-3">
                            <nav>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li class="menu-item-has-children"><a href="shop-grid.html">Menu 2</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><a href="shop-grid.html">shop grid</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop-grid-left-sidebar.html">shop grid Left Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Menu 3</a>
                                        <ul class="mega-menu two-column">
                                            <li><a href="#">Column One</a>
                                                <ul>
                                                    <li><a href="about-us.html">About us</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Column Two</a>
                                                <ul>
                                                    <li><a href="compare.html">Compare</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">JASA KONSULTASI</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-lg-2 order-1 order-lg-2 order-xl-2 d-flex justify-content-center mt-15 mb-15">
                        <!-- Logo Start -->
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="pelanggan/images/logo.png" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                                <img class="theme-dark" src="pelanggan/images/logo-light.png" alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
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

    <!-- Mini Cart Wrap Start -->
    <div class="mini-cart-wrap">

        <!-- Mini Cart Top -->
        <div class="mini-cart-top">

            <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>

        </div>

        <!-- Mini Cart Products -->
        <ul class="mini-cart-products">
            <li>
                <a class="image"><img src="pelanggan/images/product/product-1.png" alt="Product"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Waxon Note Book Pro 5</a>
                    <span class="price">Price: $295</span>
                    <span class="qty">Qty: 02</span>
                </div>
                <button class="remove"><i class="fa fa-trash-o"></i></button>
            </li>
            <li>
                <a class="image"><img src="pelanggan/images/product/product-2.png" alt="Product"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Aquet Drone D 420</a>
                    <span class="price">Price: $275</span>
                    <span class="qty">Qty: 01</span>
                </div>
                <button class="remove"><i class="fa fa-trash-o"></i></button>
            </li>
            <li>
                <a class="image"><img src="pelanggan/images/product/product-3.png" alt="Product"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Game Station X 22</a>
                    <span class="price">Price: $295</span>
                    <span class="qty">Qty: 01</span>
                </div>
                <button class="remove"><i class="fa fa-trash-o"></i></button>
            </li>
        </ul>

        <!-- Mini Cart Bottom -->
        <div class="mini-cart-bottom">

            <h4 class="sub-total">Total: <span>$1160</span></h4>

            <div class="button">
                <a href="checkout.html">CHECK OUT</a>
            </div>

        </div>

    </div><!-- Mini Cart Wrap End -->

    <!-- Cart Overlay -->
    <div class="cart-overlay"></div>

    <!-- Hero Section Start -->
    <div class="hero-section section mb-10">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Header Category -->
                    <div class="hero-side-category">

                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle">Categories <i class="ti-menu"></i></button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                <li><a href="#">Category 1</a></li>
                                <li><a href="#">Categroy 2</a></li>
                            </ul>
                        </nav>

                    </div><!-- Header Bottom End -->

                    <!-- Hero Slider Start -->
                    <div class="hero-slider hero-slider-three fix">

                        <!-- Hero Item Start -->
                        <div class="hero-item-three" style="background-image: url(pelanggan/images/hero/hero-3-bg-1.jpg)">
                            <div class="row align-items-center justify-content-between">

                                <!-- Hero Content -->
                                <div class="hero-content-three col">

                                    <h2 class="offer">50% <span>OFF</span></h2>
                                    <h1>MAKE <br> FRESH JUICE <br> ANY WHERE</h1>
                                    <a href="#">get it now</a>

                                </div>

                                <!-- Hero Image -->
                                <div class="hero-image-three col">
                                    <img src="pelanggan/images/hero/hero-6.png" alt="Hero Image">
                                </div>

                            </div>
                        </div><!-- Hero Item End -->

                        <!-- Hero Item Start -->
                        <div class="hero-item-three" style="background-image: url(pelanggan/images/hero/hero-3-bg-1.jpg)">
                            <div class="row align-items-center justify-content-between">

                                <!-- Hero Content -->
                                <div class="hero-content-three col">

                                    <h2 class="offer">50% <span>OFF</span></h2>
                                    <h1>MAKE <br> FRESH JUICE <br> ANY WHERE</h1>
                                    <a href="#">get it now</a>

                                </div>

                                <!-- Hero Image -->
                                <div class="hero-image-three col">
                                    <img src="pelanggan/images/hero/hero-6.png" alt="Hero Image">
                                </div>

                            </div>
                        </div><!-- Hero Item End -->

                    </div><!-- Hero Slider End -->

                </div>
            </div>
        </div>
    </div><!-- Hero Section End -->

    <!-- 3 card dan produk -->
    @yield('content')
    <!-- ====================================== -->

    <!-- Brands Section Start -->
    <div class="brands-section section mb-90">
        <div class="container">
            <div class="row">
                <!-- Brand Slider Start -->
                <div class="brand-slider col">
                    <div class="brand-item col"><img src="pelanggan/images/brands/brand-1.png" alt="Brands">
                    </div>
                    <div class="brand-item col"><img src="pelanggan/images/brands/brand-2.png" alt="Brands">
                    </div>
                    <div class="brand-item col"><img src="pelanggan/images/brands/brand-3.png" alt="Brands">
                    </div>
                    <div class="brand-item col"><img src="pelanggan/images/brands/brand-4.png" alt="Brands">
                    </div>
                    <div class="brand-item col"><img src="pelanggan/images/brands/brand-5.png" alt="Brands">
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


                <!-- JS
============================================ -->

                <!-- jQuery JS -->
                <script src="pelanggan/js/vendor/jquery-1.12.4.min.js"></script>
                <!-- Popper JS -->
                <script src="pelanggan/js/popper.min.js"></script>
                <!-- Bootstrap JS -->
                <script src="pelanggan/js/bootstrap.min.js"></script>
                <!-- Plugins JS -->
                <script src="pelanggan/js/plugins.js"></script>
                <!-- Ajax Mail -->
                <script src="pelanggan/js/ajax-mail.js"></script>
                <!-- Main JS -->
                <script src="pelanggan/js/main.js"></script>

</body>

</html>