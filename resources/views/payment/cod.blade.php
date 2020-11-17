@extends('pelanggan.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
<div class="container">
    <h3 class="text-center">YOUR ORDER HAS BEEN PLACED</h3>
    <p class="text-center">Thanks for your Order that use Options on Cash On Delivery</p>
    <p class="text-center">ID User (<b>{{$user_order->users_id}}</b>) or Order ID (<b>{{$user_order->id}}</b>)</p>
</div>
<div style="margin-bottom: 20px;"></div>
@endsection