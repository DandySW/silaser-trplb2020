<?php

namespace App\Http\Controllers;

use App\Orders_model;
use App\OrderDetails_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrdersAdminController extends Controller
{
    // orders/belum-dibayar -> Menampilkan semua yang belum dibayar
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
    // orders/belum-dibayar -> Mengonfirmasi pembayaran
    public function pembayaran($id)
    {
        Orders_model::where('id', $id)->update(['checkout_status' => 'sudah dibayar']);
        return back()->with('message', 'Berhasil mengonfirmasi Pembayaran.');
    }

    // orders/sedang-proses -> Menampilkan semua yang sedang proses
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
    // orders/belum-dibayar -> Menampilkan form pengiriman
    public function createpengiriman($id)
    {
        $menu_active = 4;
        $order = Orders_model::findOrFail($id);
        return view('admin.orders.create-pengiriman', compact('menu_active', 'order'));
    }
    // orders/belum-dibayar -> Menngupdate pengiriman
    public function pengiriman(Request $request, $id)
    {
        $update_order = Orders_model::findOrFail($id);
        $this->validate($request, [
            'resi' => 'required|min:10|max:20|unique:orders,resi,' . $update_order->id,
            'shipping_date' => 'required|date'
        ]);
        $input_data = $request->all();
        $update_order->update($input_data);
        return redirect(url('admin/orders/sedang-proses'))->with('message', 'Berhasil mengubah status pengiriman');
    }

    public function sudahselesai()
    {

        $menu_active = 4;
        $orders = DB::select(
            "SELECT orders.*, expeditions.expedition_name, expeditions.type, expeditions.estimation, users.name 
            FROM orders 
            INNER join expeditions on expeditions.id = orders.expedition 
            INNER join users on users.id = orders.users_id 
            Where receipt_status = 'sudah diterima' order BY orders.id asc"
        );
        $orderdetails = DB::select(
            "SELECT order_details.orders_id, products.p_name, order_details.quantity
            FROM `orders`, `order_details`, `products`
            WHERE orders.id = order_details.orders_id and order_details.products_id = products.id
            order by orders_id ASC"
        );
        $coupons = DB::select("SELECT coupon_id, coupons.coupon_code, coupons.id from orders, coupons where coupon_id=coupons.id");
        return view('admin.orders.sudah-selesai', compact('menu_active', 'orders', 'orderdetails', 'coupons'));
    }
}
