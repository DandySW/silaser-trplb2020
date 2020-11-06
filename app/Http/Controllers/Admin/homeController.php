<?php

namespace App\Http\Controllers\Admin;

use App\data_produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_produk = data_produk::all();
        return view('admin.home', ['data_produk' => $data_produk]);
    }
}
