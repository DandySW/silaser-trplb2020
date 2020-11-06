@extends('base-front')

@section('title')
<title>SILASER - Sistem Informasi Penjualan dan Layanan Servis Laptop</title>
@endsection

@section('header auth')
<!-- Header Auth -->
<div class="col mt-10 mb-10">

    <div class="header-account-links">
        <i class="icofont icofont-user-alt-7"></i>
    </div>

    <div class="header-account-links">
        <span class="d-block"><a href="#">Login</a></span>
        <span class="d-block">|</span>
        <span class="d-block"><a href="#">Register</a></span>
    </div>

</div>

<div class="col mt-10 mb-10">
    <!-- Header Shop Links Start -->
    <div class="header-shop-links">

        <!-- Cart -->
        <a href="cart.html" class="header-cart"><i class="ti-shopping-cart"></i> <span class="number">3</span></a>

    </div><!-- Header Shop Links End -->
</div>
@endsection

@section('header-menu')
<div class="col-lg-5 order-12 order-lg-1 order-xl-1 d-none d-lg-block">
    <div class="main-menu menu-3">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">JASA KONSULTASI</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection

@section('cart')
<!-- Mini Cart Wrap Start -->
<div class="mini-cart-wrap">

    <!-- Mini Cart Top -->
    <div class="mini-cart-top">

        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>

    </div>

    <!-- Mini Cart Products -->
    <ul class="mini-cart-products">
        <li>
            <a class="image"><img src="/assets/images/product/product-1.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Waxon Note Book Pro 5</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 02</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="/assets/images/product/product-2.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Aquet Drone D 420</a>
                <span class="price">Price: $275</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="/assets/images/product/product-3.png" alt="Product"></a>
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
@endsection

@section('content')
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
                    <div class="hero-item-three" style="background-image: url(/assets/images/hero/hero-3-bg-1.jpg)">
                        <div class="row align-items-center justify-content-between">

                            <!-- Hero Content -->
                            <div class="hero-content-three col">

                                <h2 class="offer">50% <span>OFF</span></h2>
                                <h1>MAKE <br> FRESH JUICE <br> ANY WHERE</h1>
                                <a href="#">get it now</a>

                            </div>

                            <!-- Hero Image -->
                            <div class="hero-image-three col">
                                <img src="/assets/images/hero/hero-6.png" alt="Hero Image">
                            </div>

                        </div>
                    </div><!-- Hero Item End -->

                    <!-- Hero Item Start -->
                    <div class="hero-item-three" style="background-image: url(/assets/images/hero/hero-3-bg-1.jpg)">
                        <div class="row align-items-center justify-content-between">

                            <!-- Hero Content -->
                            <div class="hero-content-three col">

                                <h2 class="offer">50% <span>OFF</span></h2>
                                <h1>MAKE <br> FRESH JUICE <br> ANY WHERE</h1>
                                <a href="#">get it now</a>

                            </div>

                            <!-- Hero Image -->
                            <div class="hero-image-three col">
                                <img src="/assets/images/hero/hero-6.png" alt="Hero Image">
                            </div>

                        </div>
                    </div><!-- Hero Item End -->

                </div><!-- Hero Slider End -->

            </div>
        </div>
    </div>
</div><!-- Hero Section End -->

<!-- 3 card dan produk -->
<!-- Feature Section Start -->
<div class="feature-section section mb-80">
    <div class="container">
        <div class="row row-5">

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <!-- Feature Start -->
                <div class="feature-two feature-three" style="background-image: url(/assets/images/icons/feature-van-2-bg.png); background-color: #e9f2c3;">
                    <div class="feature-wrap">
                        <div class="icon"><img src="/assets/images/icons/feature-van-2.png" alt="Feature"></div>
                        <h4>FREE SHIPPING</h4>
                        <p>Start from $100</p>
                    </div>
                </div><!-- Feature End -->
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <!-- Feature Start -->
                <div class="feature-two feature-three" style="background-image: url(/assets/images/icons/feature-walet-2-bg.png); background-color: #efe47a;">
                    <div class="feature-wrap">
                        <div class="icon"><img src="/assets/images/icons/feature-walet-2.png" alt="Feature"></div>
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p>Back within 15 days</p>
                    </div>
                </div><!-- Feature End -->
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <!-- Feature Start -->
                <div class="feature-two feature-three" style="background-image: url(/assets/images/icons/feature-shield-2-bg.png); background-color: #9fecf0;">
                    <div class="feature-wrap">
                        <div class="icon"><img src="/assets/images/icons/feature-shield-2.png" alt="Feature"></div>
                        <h4>SECURE PAYMENTS</h4>
                        <p>Payment Security</p>
                    </div>
                </div><!-- Feature End -->
            </div>

        </div>
    </div>
</div><!-- Feature Section End -->

<!-- Section Product Start -->
<div class="product-section section mb-60">
    <div class="container">
        <div class="row">

            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="RANDOM PRODUCTS">
                    <h1>PRODUK KAMI</h1>
                </div>
            </div><!-- Section Title End -->

            <div class="col-12">
                <div class="row">
                    @foreach ($data_produk as $produk)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="single-product.html" class="img"><img src="/assets/images/product/product-5.png" alt="Product Image"></a>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO
                                        CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Camera</a>
                                    <h5 class="title"><a href="single-product.html">{{ $produk->nama_produk }}</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">{{ $produk->harga_produk }}</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Product End -->
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Section Product End -->
@endsection