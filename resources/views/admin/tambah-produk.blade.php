@extends('base-front')

@section('title')
<title>Tambah Produk - SILASER</title>
@endsection

@section('header auth')
<!-- Header Auth -->
<div class="col mt-10 mb-10">

    <div class="header-account-links">
        <i class="icofont icofont-user-alt-7"></i>
    </div>

    <div class="header-account-links">
        <span class="d-block"><a href="#">Akun Saya</a></span>
        <span class="d-block">|</span>
        <span class="d-block"><a href="#">Logout</a></span>
    </div>

</div>
@endsection

@section('content')
<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="images/img-01.png" alt="IMG">
        </div>

        <form class="contact1-form validate-form">
            <span class="contact1-form-title">
                Get in touch
            </span>

            <div class="wrap-input1 validate-input" data-validate="Name is required">
                <input class="input1" type="text" name="name" placeholder="Name">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input class="input1" type="text" name="email" placeholder="Email">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Subject is required">
                <input class="input1" type="text" name="subject" placeholder="Subject">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Message is required">
                <textarea class="input1" name="message" placeholder="Message"></textarea>
                <span class="shadow-input1"></span>
            </div>

            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn">
                    <span>
                        Send Email
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('header-menu')
<div class="col-lg-5 order-12 order-lg-1 order-xl-1 d-none d-lg-block">
    <div class="main-menu menu-3">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li class="menu-item-has-children"><a href="#">Tambah Data</a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="/admin/tambah-produk">Data Produk</a></li>
                        <li class="menu-item"><a href="/admin/tambah-konsltan">Data Konsultan</a></li>
                    </ul>
                </li>
                <li><a href="#">Rekap Data Pesanan</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection