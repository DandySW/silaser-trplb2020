<?php

namespace App\Http\Controllers\Pelanggan;

use App\data_produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function index()
    {
        $data_produk = data_produk::all();
        return view('pelanggan.home', ['data_produk' => $data_produk]);
    }
}
