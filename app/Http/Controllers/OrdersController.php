<?php

namespace App\Http\Controllers;

use App\Cart_model;
use App\Orders_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    public function index()
    {
        $auth_id = Auth::id();
        $cart_datas = DB::select("SELECT cart.id, cart.users_id,products.description , products.p_name, products.price, cart.quantity, products.image, products.stock, users.address, users.postcode, users.mobile FROM `cart`,`products`, `users` WHERE users.id = $auth_id and cart.products_id = products.id and cart.users_id = users.id");

        $total_price = 0;
        foreach ($cart_datas as $cart_data) {
            $total_price += $cart_data->price * $cart_data->quantity;
        }
        $total_price += 8;
        return view('checkout.review_order', compact('cart_datas', 'total_price'));
    }
    public function order(Request $request)
    {
        $input_data = $request->all();
        $payment_method = $input_data['payment_method'];
        Orders_model::create($input_data);
        if ($payment_method == "COD") {
            return redirect('/cod');
        } else {
            return redirect('/paypal');
        }
    }
    public function cod()
    {
        $user_order = Orders_model::where('users_id', Auth::id())->first();
        return view('payment.cod', compact('user_order'));
    }
    public function paypal(Request $request)
    {
        $who_buying = Orders_model::where('users_id', Auth::id())->first();
        return view('payment.paypal', compact('who_buying'));
    }
}
