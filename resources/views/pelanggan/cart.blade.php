@extends('pelanggan.layouts.master')
@section('title','Cart Page')
@section('slider')
@endsection
@section('content')
<section id="cart_items">
    <div class="container">
        @if(Session::has('message'))
        <div class="alert alert-success text-center" role="alert">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Produk</td>
                        <td class="description"></td>
                        <td class="price">Harga</td>
                        <td class="quantity">Jumlah</td>
                        <td class="total">Total</td>
                        <td>Hapus</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart_datas as $cart_data)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{url('products/small',$cart_data->image)}}" alt="" style="width: 100px;"></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$cart_data->p_name}}</a></h4>
                            <?= '<p>' . (substr($cart_data->description, 0, 30)) . '...' . '</p>' ?>
                        </td>
                        <td class="cart_price">
                            <p>Rp{{$cart_data->price}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                @if($cart_data->quantity<$cart_data->stock)
                                    <a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$cart_data->id.'/1')}}"> + </a>
                                    @else
                                    <a class="cart_quantity_up"></a>
                                    @endif

                                    <input class="cart_quantity_input" type="text" name="quantity" value="{{$cart_data->quantity}}" autocomplete="off" readonly size="2">

                                    @if($cart_data->quantity>1)
                                    <a class="cart_quantity_down" href="{{url('/cart/update-quantity/'.$cart_data->id.'/-1')}}"> - </a>
                                    @else
                                    <a class="cart_quantity_up"></a>
                                    @endif
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">Rp {{$cart_data->price*$cart_data->quantity}}</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{url('/cart/deleteItem',$cart_data->id)}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                @if(Session::has('message_apply_sucess'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('message_apply_sucess')}}
                </div>
                @endif
                <div class="total_area">
                    <ul>
                        <li>Total <span>$ {{$total_price}}</span></li>
                    </ul>
                    <div style="margin-left: 20px;"><a class="btn btn-default check_out" href="{{url('/check-out')}}">Proses ke pembayaran.</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#do_action-->
@endsection