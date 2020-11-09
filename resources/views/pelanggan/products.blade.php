@extends('pelanggan.layouts.master')
@section('title','Daftar Produk | SILASER - Sistem Informasi Penjualan dan Layanan Servis Laptop')
@section('slider')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            @include('pelanggan.layouts.category_menu')
        </div>
        <div class="col-sm-9 padding-right">
            <div class="features_items">
                <!--features_items-->
                <?php
                $products = $list_product;
                echo '<h2 class="title text-center">Daftar Produk dengan kategori ' . $byCate->nama_kategori . '</h2>';
                ?>
                @foreach($products as $product)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->gambar)}}" alt="" /></a>
                                <h2>$ {{$product->harga}}</h2>
                                <p>{{$product->nama_produk}}</p>
                                <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">Detail Produk</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{--<ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>--}}
            </div>
            <!--features_items-->
        </div>
    </div>
</div>
@endsection