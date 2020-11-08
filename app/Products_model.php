<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_model extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['id_kategori', 'nama_produk', 'no_barcode', 'deskripsi', 'harga', 'gambar'];

    public function category()
    {
        return $this->belongsTo(Category_model::class, 'id_kategori', 'id');
    }
    public function attributes()
    {
        return $this->hasMany(ProductAtrr_model::class, 'products_id', 'id');
    }
}
