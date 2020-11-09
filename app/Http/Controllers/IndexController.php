<?php

namespace App\Http\Controllers;

use App\Category_model;
use App\ImageGallery_model;
use App\ProductAtrr_model;
use App\Products_model;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = Products_model::all();
        return view('pelanggan.index', compact('products'));
    }
    public function shop()
    {
        $products = Products_model::all();
        $byCate = "";
        return view('pelanggan.products', compact('products', 'byCate'));
    }
    public function listByCat($id)
    {
        $list_product = Products_model::where('id_kategori', $id)->get();
        $byCate = Category_model::select('nama_kategori')->where('id', $id)->first();
        return view('pelanggan.products', compact('list_product', 'byCate'));
    }
    public function detialpro($id)
    {
        $detail_product = Products_model::findOrFail($id);
        $imagesGalleries = ImageGallery_model::where('products_id', $id)->get();
        $totalStock = ProductAtrr_model::where('products_id', $id)->sum('stock');
        $relateProducts = Products_model::where([['id', '!=', $id], ['id_kategori', $detail_product->id_kategori]])->get();
        return view('pelanggan.product_details', compact('detail_product', 'imagesGalleries', 'totalStock', 'relateProducts'));
    }
    public function getAttrs(Request $request)
    {
        $all_attrs = $request->all();
        //print_r($all_attrs);die();
        $attr = explode('-', $all_attrs['size']);
        //echo $attr[0].' <=> '. $attr[1];
        $result_select = ProductAtrr_model::where(['products_id' => $attr[0], 'size' => $attr[1]])->first();
        echo $result_select->price . "#" . $result_select->stock;
    }
}
