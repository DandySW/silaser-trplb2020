<?php

namespace App\Http\Controllers\Admin;

use App\data_produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ('ini view index produk');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah-produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        data_produk::create($request->all());
        return redirect('admin/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\data_produk  $data_produk
     * @return \Illuminate\Http\Response
     */
    public function show(data_produk $data_produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\data_produk  $data_produk
     * @return \Illuminate\Http\Response
     */
    public function edit(data_produk $data_produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\data_produk  $data_produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data_produk $data_produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\data_produk  $data_produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_produk $data_produk)
    {
        //
    }
}
