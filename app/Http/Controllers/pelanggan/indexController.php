<?php

namespace App\Http\Controllers\pelanggan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index()
    {
        // return view("");
        return view("pelanggan.index");
    }
}
