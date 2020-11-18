<?php

namespace App\Http\Controllers;

use App\User;
use App\Orders_model;
use App\OrderDetails_model;
use App\Cart_model;
use App\Coupon_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    public function index()
    {
        $session_id = Session::get('session_id');
        $auth_id = Auth::id();
        $cart_datas = DB::select("SELECT cart.id, cart.users_id,products.description , products.p_name, products.price, cart.quantity, products.image, products.stock FROM `cart`,`products`, `users` WHERE users.id = $auth_id and cart.products_id = products.id and cart.users_id = users.id");

        $session_coupon = Session::get('coupon_code');
        $coupon_id = Coupon_model::select('id')->where('coupon_code', $session_coupon)->first();

        $user_data = User::where('id', Auth::id())->first();

        $total_price = 0;
        foreach ($cart_datas as $cart_data) {
            $total_price += $cart_data->price * $cart_data->quantity;
        }
        return view('checkout.review_order', compact('cart_datas', 'total_price', 'user_data', 'coupon_id'));
    }
    public function order(Request $request)
    {
        $input_data = $request->all();
        Orders_model::create($input_data);

        //Mengisi tabel order, order details. Menghapus baris cart
        $last_orders = DB::select("SELECT id FROM orders ORDER BY id DESC LIMIT 1");
        foreach ($last_orders as $last_order) {
            $order_id = $last_order->id;
        }


        $cart_datas = DB::select("SELECT products_id, quantity FROM `cart` WHERE cart.users_id = $request->users_id");

        foreach ($cart_datas as $cart_data) {
            $order_details = new OrderDetails_model;
            $order_details->orders_id = $order_id;
            $order_details->products_id = $cart_data->products_id;
            $order_details->quantity = $cart_data->quantity;
            $order_details->save();
        }

        Cart_model::where('users_id', $request->users_id)->delete();
        return redirect('/');
    }
}
