@extends('template-front')

@section('title')
<title>SILASER - Sistem Informasi Penjualan dan Layanan Servis Laptop</title>
@endsection

@section('header auth')
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
@endsection

@section('content')
<!-- Feature Section Start -->
<div class="feature-section section mb-80">
    <div class="container">
        <div class="row row-5">

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <!-- Feature Start -->
                <div class="feature-two feature-three" style="background-image: url(pelanggan/images/icons/feature-van-2-bg.png); background-color: #e9f2c3;">
                    <div class="feature-wrap">
                        <div class="icon"><img src="pelanggan/images/icons/feature-van-2.png" alt="Feature"></div>
                        <h4>FREE SHIPPING</h4>
                        <p>Start from $100</p>
                    </div>
                </div><!-- Feature End -->
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <!-- Feature Start -->
                <div class="feature-two feature-three" style="background-image: url(pelanggan/images/icons/feature-walet-2-bg.png); background-color: #efe47a;">
                    <div class="feature-wrap">
                        <div class="icon"><img src="pelanggan/images/icons/feature-walet-2.png" alt="Feature"></div>
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p>Back within 15 days</p>
                    </div>
                </div><!-- Feature End -->
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-10">
                <!-- Feature Start -->
                <div class="feature-two feature-three" style="background-image: url(pelanggan/images/icons/feature-shield-2-bg.png); background-color: #9fecf0;">
                    <div class="feature-wrap">
                        <div class="icon"><img src="pelanggan/images/icons/feature-shield-2.png" alt="Feature"></div>
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

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="single-product.html" class="img"><img src="pelanggan/images/product/product-5.png" alt="Product Image"></a>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO
                                        CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Camera</a>
                                    <h5 class="title"><a href="single-product.html">Mony Handycam Z 105</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$110.00</h5>
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
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Section Product End -->
@endsection