<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class KonsultanController extends Controller
{
    public function index()
    {
        $menu_active = 1;
        $user =  Auth::user();
        return view('konsultan.index', compact('menu_active', 'user'));
    }
    public function settings()
    {
        $menu_active = 1;
        $user =  Auth::user();
        return view('konsultan.setting', compact('menu_active', 'user'));
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
    public function updatKonsPwd(Request $request)
    {
        $data = $request->all();
        $current_password = $data['pwd_current'];
        $email_login = Auth::user()->email;
        $check_password = User::where(['email' => $email_login])->first();
        if (Hash::check($current_password, $check_password->password)) {
            $password = bcrypt($data['pwd_new']);
            User::where('email', $email_login)->update(['password' => $password]);
            return redirect('/konsultan/edit-profile')->with('message', 'Well Done! profil anda berhasil diubah');
        } else {
            return redirect('/konsultan/edit-profile')->with('message', 'Field is not valid');
        }
    }
    public function admin()
    {
        $menu_active = 6;
        $users = User::where('status', 2)->get();
        return view('admin.konsultan.index', compact('menu_active', 'users'));
    }
    public function create()
    {
        $menu_active = 6;
        return view('admin.konsultan.create', compact('menu_active'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:users,name',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
        $input_data = $request->all();
        $input_data['password'] = Hash::make($input_data['password']);
        User::create($input_data);
        return redirect('admin/konsultan')->with('message', 'Well Done! Akun konsultan berhasil dibuat');
    }
}
