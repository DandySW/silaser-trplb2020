<?php

namespace App\Http\Controllers;

use App\Category_model;
use App\Products_model;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_active = 3;
        $products = Products_model::all();
        return view('admin.products.index', compact('menu_active', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_active = 3;
        $categories = Category_model::all();
        return view('admin.products.create', compact('menu_active', 'categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required|max:50',
            'no_barcode' => 'required|numeric|digits:13|unique:products,no_barcode',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:1000',
        ]);
        $formInput = $request->all();
        if ($request->file('gambar')) {
            $image = $request->file('gambar');
            if ($image->isValid()) {
                $fileName = time() . '_' . $formInput['nama_produk']  . '.' . $image->getClientOriginalExtension();
                $large_image_path = public_path('products/large/' . $fileName);
                $medium_image_path = public_path('products/medium/' . $fileName);
                $small_image_path = public_path('products/small/' . $fileName);
                //Resize Image
                Image::make($image)->save($large_image_path);
                Image::make($image)->resize(600, 600)->save($medium_image_path);
                Image::make($image)->resize(300, 300)->save($small_image_path);
                $formInput['gambar'] = $fileName;
            }
        }
        Products_model::create($formInput);
        return redirect()->route('product.index')->with('message', 'Data Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu_active = 3;
        $edit_product = Products_model::findOrFail($id);
        $edit_category = Category_model::findOrFail($edit_product->id_kategori);
        $categories = Category_model::all();
        return view('admin.products.edit', compact('edit_product', 'menu_active', 'categories', 'edit_category'));
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
        $update_product = Products_model::findOrFail($id);
        $this->validate($request, [
            'p_name' => 'required|min:5',
            'p_code' => 'required',
            'p_color' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'gambar' => 'image|mimes:png,jpg,jpeg|max:1000',
        ]);
        $formInput = $request->all();
        if ($update_product['gambar'] == '') {
            if ($request->file('gambar')) {
                $image = $request->file('gambar');
                if ($image->isValid()) {
                    $fileName = time() . '_' . $formInput['nama_produk']  . '.' . $image->getClientOriginalExtension();
                    $large_image_path = public_path('products/large/' . $fileName);
                    $medium_image_path = public_path('products/medium/' . $fileName);
                    $small_image_path = public_path('products/small/' . $fileName);
                    //Resize Image
                    Image::make($image)->save($large_image_path);
                    Image::make($image)->resize(600, 600)->save($medium_image_path);
                    Image::make($image)->resize(300, 300)->save($small_image_path);
                    $formInput['gambar'] = $fileName;
                }
            }
        } else {
            $formInput['gambar'] = $update_product['gambar'];
        }
        $update_product->update($formInput);
        return redirect()->route('product.index')->with('message', 'Data Produk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Products_model::findOrFail($id);
        $image_large = public_path() . '/products/large/' . $delete->gambar;
        $image_medium = public_path() . '/products/medium/' . $delete->gambar;
        $image_small = public_path() . '/products/small/' . $delete->gambar;
        if ($delete->delete()) {
            unlink($image_large);
            unlink($image_medium);
            unlink($image_small);
        }
        return redirect()->route('product.index')->with('message', 'Data Produk berhasil dihapus');
    }
    public function deleteImage($id)
    {
        //Products_model::where(['id'=>$id])->update(['gambar'=>'']);
        $delete_image = Products_model::findOrFail($id);
        $image_large = public_path() . '/products/large/' . $delete_image->gambar;
        $image_medium = public_path() . '/products/medium/' . $delete_image->gambar;
        $image_small = public_path() . '/products/small/' . $delete_image->gambar;
        if ($delete_image) {
            $delete_image->gambar = '';
            $delete_image->save();
            ////// delete image ///
            unlink($image_large);
            unlink($image_medium);
            unlink($image_small);
        }
        return back();
    }
}
