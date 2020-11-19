<?php

namespace App\Http\Controllers;

use App\Orders_model;
use App\OrderDetails_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderDetailsController extends Controller
{
    public function belumdibayar()
    {
        $menu_active = 4;
        $orders = DB::select(
            "SELECT orders.*, expeditions.expedition_name, expeditions.type, expeditions.estimation, users.name 
            FROM orders 
            INNER join expeditions on expeditions.id = orders.expedition 
            INNER join users on users.id = orders.users_id 
            Where checkout_status = 'belum dibayar' order BY orders.id asc"
        );
        $orderdetails = DB::select(
            "SELECT order_details.orders_id, products.p_name, order_details.quantity
            FROM `orders`, `order_details`, `products`
            WHERE orders.id = order_details.orders_id and order_details.products_id = products.id
            order by orders_id ASC"
        );
        $coupons = DB::select("SELECT coupon_id, coupons.coupon_code, coupons.id from orders, coupons where coupon_id=coupons.id");
        return view('admin.orders.belum-dibayar', compact('menu_active', 'orders', 'orderdetails', 'coupons'));
    }
    public function pembayaran($id)
    {
        Orders_model::where('id', $id)->update(['checkout_status' => 'sudah dibayar']);
        // DB::select("UPDATE `orders` SET checkout_status = 'sudah dibayar' WHERE orders.id = $id");
        return back()->with('message', 'Berhasil mengonfirmasi Pembayaran.');
    }

    public function sedangproses()
    {
        $menu_active = 4;
        $orders = DB::select(
            "SELECT orders.*, expeditions.expedition_name, expeditions.type, expeditions.estimation, users.name 
            FROM orders 
            INNER join expeditions on expeditions.id = orders.expedition 
            INNER join users on users.id = orders.users_id 
            Where checkout_status = 'sudah dibayar' and receipt_status = 'belum diterima' order BY orders.id asc"
        );
        $orderdetails = DB::select(
            "SELECT order_details.orders_id, products.p_name, order_details.quantity
            FROM `orders`, `order_details`, `products`
            WHERE orders.id = order_details.orders_id and order_details.products_id = products.id
            order by orders_id ASC"
        );
        $coupons = DB::select("SELECT coupon_id, coupons.coupon_code, coupons.id from orders, coupons where coupon_id=coupons.id");
        return view('admin.orders.sedang-proses', compact('menu_active', 'orders', 'orderdetails', 'coupons'));
    }
}
