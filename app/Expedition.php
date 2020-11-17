<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedition extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['expedition_name', 'type', 'estimation', 'basecharge'];
}
