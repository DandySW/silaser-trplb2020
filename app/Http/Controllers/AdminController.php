<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $menu_active = 1;
        $user =  Auth::user();
        return view('admin.index', compact('menu_active', 'user'));
    }
    public function settings()
    {
        $menu_active = 1;
        $user =  Auth::user();
        return view('admin.setting', compact('menu_active', 'user'));
    }
    public function updateprofile(Request $request, $id)
    {
        $this->validate($request, [
            'address' => 'required|min:10|max:65535',
            'kelurahan' => 'required|min:5|max:30',
            'kecamatan' => 'required|min:5|max:30',
            'postcode' => 'required|numeric|digits:5',
            'mobile' => 'required|min:12|max:15',
        ]);
        $input_data = $request->all();
        User::where('id', $id)->update([
            'address' => $input_data['address'],
            'kelurahan' => $input_data['kelurahan'],
            'kecamatan' => $input_data['kecamatan'],
            'postcode' => $input_data['postcode'],
            'mobile' => $input_data['mobile']
        ]);
        return redirect('/admin')->with('message', 'Well Done! profil anda berhasil diubah');
    }
    public function chkPassword(Request $request)
    {
        $data = $request->all();
        $current_password = $data['pwd_current'];
        $email_login = Auth::user()->email;
        $check_pwd = User::where(['email' => $email_login])->first();
        if (Hash::check($current_password, $check_pwd->password)) {
            echo "true";
            die();
        } else {
            echo "false";
            die();
        }
    }
    public function updatAdminPwd(Request $request)
    {
        $data = $request->all();
        $current_password = $data['pwd_current'];
        $email_login = Auth::user()->email;
        $check_password = User::where(['email' => $email_login])->first();
        if (Hash::check($current_password, $check_password->password)) {
            $password = bcrypt($data['pwd_new']);
            User::where('email', $email_login)->update(['password' => $password]);
            return redirect('/admin')->with('message', 'Well Done! profil anda berhasil diubah');
        } else {
            return redirect('/admin/edit-profile')->with('message', 'Field is not valid');
        }
    }





    /*public function login(Request $request){
        if($request->isMethod('post')){
            $data=$request->input();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
                echo 'success'; die();
            }else{
                return redirect('admin')->with('message','Account is Incorrect!');
            }
        }else{
            return view('admin.login');
        }
    }*/
}
