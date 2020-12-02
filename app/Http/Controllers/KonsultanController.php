<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultanController extends Controller
{
    public function index()
    {
        $menu_active = 1;
        return view('konsultan.index', compact('menu_active'));
    }
}
