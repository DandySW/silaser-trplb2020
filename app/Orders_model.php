<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_model extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = [
        'users_id', 'expedition', 'shipping_charge', 'total', 'status_pembayaran', 'resi', 'status_pengiriman', 'status_penerimaan'
    ];
}
