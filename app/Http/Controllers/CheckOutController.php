<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{
    public function index()
    {
        $user_login = User::where('id', Auth::id())->first();
        return view('checkout.index', compact('user_login'));
    }
    public function submitcheckout(Request $request)
    {
        $this->validate($request, [
            'billing_name' => 'required',
            'billing_address' => 'required',
            'billing_postcode' => 'required',
            'billing_mobile' => 'required',
        ]);
        $input_data = $request->all();
        $check_users = DB::table('users')->select('address')->where('id', Auth::id());
        if ($check_users != NULL) {
            DB::table('users')->where('id', Auth::id())->update([
                'address' => $input_data['billing_address'],
                'postcode' => $input_data['billing_postcode'],
                'mobile' => $input_data['billing_mobile']
            ]);
        } else {
            DB::table('users')->insert([
                'address' => $input_data['billing_address'],
                'postcode' => $input_data['billing_postcode'],
                'mobile' => $input_data['billing_mobile']
            ]);
        }
        return redirect('/order-review');
    }
}
