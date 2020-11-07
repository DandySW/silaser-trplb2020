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
            <img src="/form/images/img-01.png" alt="IMG">
        </div>

        <form action="/admin/produk" method="post" class="contact1-form validate-form" enctype="multipart/form-data">
            @csrf
            <span class="contact1-form-title">Tambah Data Produk</span>
            <label for="tambah-produk"></label>
            <div class="wrap-input1 validate-input" data-validate="Wajib diisi!">
                <input class="input1" type="text" name="nama_produk" placeholder="Nama Produk">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Wajib diisi!">
                <input class="input1" type="text" name="harga_produk" placeholder="Harga Produk">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Wajib diisi!">
                <input class="input1" type="text" name="stok_produk" placeholder="Stok Produk">
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Wajib diisi!">
                <textarea class="input1" name="deskripsi_produk" placeholder="Deskripsi Produk"></textarea>
                <span class="shadow-input1"></span>
            </div>

            <div class="wrap-input1 validate-input" data-validate="Wajib diisi!">
                <input type="file" style="width:400px;" class="input1" name="foto_produk" alt="foto_produk">
            </div>

            <div class="container-contact1-form-btn">
                <button type="submit" class="contact1-form-btn">
                    <span>
                        Tambah
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
                <li><a href="{{ url('/admin') }}">Home</a></li>
                <li class="menu-item-has-children"><a href="#">Tambah Data</a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="{{ url('/admin/produk/create') }}">Data Produk</a></li>
                        <li class="menu-item"><a href="{{ url('/admin/konsultan/create') }}">Data Konsultan</a></li>
                    </ul>
                </li>
                <li><a href="#">Rekap Data Pesanan</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection