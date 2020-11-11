@extends('pelanggan.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
<div class="container">
    <div class="step-one">
        <h2 class="heading">Shipping To</h2>
    </div>
    <div class="row">
        <form action="{{url('/submit-order')}}" method="post" class="form-horizontal">
            @csrf
            <input type="hidden" name="users_id" value="{{$cart_datas->users_id}}">
            <input type="hidden" name="grand_total" value="{{$total_price}}">
            <input type="hidden" name="ekspedisi" value="Pos Indonesia (1-2 hari)">
            <input type="hidden" name="status_pembayaran" value="belum dibayar">

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Alamat</th>
                                <th>Kode Pos</th>
                                <th>No HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$cart_datas->name}}</td>
                                <td>{{$cart_datas->address}}</td>
                                <td>{{$cart_datas->postcode}}</td>
                                <td>{{$cart_datas->mobile}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <section id="cart_items">
                    <div class="review-payment">
                        <h2>Review & Payment</h2>
                    </div>
                    <div class="table-responsive cart_info">
                        <table class="table table-condensed">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="image">Produk</td>
                                    <td class="description"></td>
                                    <td class="price">Harga</td>
                                    <td class="quantity">Jumlah</td>
                                    <td class="total">Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart_datas as $cart_data)
                                <?php
                                $image_products = DB::table('products')->select('image')->where('id', $cart_data->products_id)->get();
                                ?>
                                <tr>
                                    <td class="cart_product">
                                        @foreach($image_products as $image_product)
                                        <a href=""><img src="{{url('products/small',$image_product->image)}}" alt="" style="width: 100px;"></a>
                                        @endforeach
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="">{{$cart_data->product_name}}</a></h4>
                                        <?= '<p>' . (substr($cart_data->description, 0, 30)) . '...' . '</p>' ?>
                                    </td>
                                    <td class="cart_price">
                                        <p>${{$cart_data->price}}</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <p>{{$cart_data->quantity}}</p>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">Rp {{$cart_data->price*$cart_data->quantity}}</p>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                    <td colspan="2">
                                        <table class="table table-condensed total-result">
                                            <tr>
                                                <td>Pos Indonesia (1-2 hari)</td>
                                                <td>Rp 10</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td><span>Rp {{$total_price}}</span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>

            </div>
        </form>
    </div>
</div>
<div style="margin-bottom: 20px;"></div>
@endsection