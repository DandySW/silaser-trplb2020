<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_model extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = [
        'users_id', 'expedition', 'shipping_charge', 'coupon_id', 'coupon_amount', 'grand_total', 'order_date', 'checkout_status', 'struk', 'resi', 'shipping_status', 'shipping_date', 'receipt_status', 'receipt_date'
    ];
}
