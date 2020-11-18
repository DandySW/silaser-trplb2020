<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpeditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function applycoupon(Request $request)
    {
        $this->validate($request, [
            'coupon_code' => 'required'
        ]);
        $input_data = $request->all();
        $coupon_code = $input_data['coupon_code'];
        $total_amount_price = $input_data['Total_amountPrice'];
        $check_coupon = Coupon_model::where('coupon_code', $coupon_code)->count();
        if ($check_coupon == 0) {
            return back()->with('message_coupon', 'Kupon tidak ditemukan');
        } else if ($check_coupon == 1) {
            $check_status = Coupon_model::where('status', 1)->first();
            if ($check_status->status == 0) {
                return back()->with('message_coupon', 'Kupon sedang tidak aktif');
            } else {
                $expiried_date = $check_status->expiry_date;
                $date_now = date('Y-m-d');
                if ($expiried_date < $date_now) {
                    return back()->with('message_coupon', 'Kupon telah kadaluarsa');
                } else {
                    $discount_amount_price = ($total_amount_price * $check_status->amount) / 100;
                    Session::put('discount_amount_price', $discount_amount_price);
                    Session::put('coupon_code', $check_status->coupon_code);
                    return back()->with('message_apply_sucess', 'Berhasil menggunakan kupon');
                }
            }
        }
    }
}
