<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_produk extends Model
{
    protected $table = 'data_produk';
    protected $fillable = ['nama_produk', 'foto_produk', 'harga_produk', 'stok_produk', 'deskripsi_produk'];
}
