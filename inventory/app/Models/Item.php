<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'kode_barang',
        'brand_id',
        'supplier_id',
        'harga',
    ];

    public function sales() {
        return $this->hasMany('App\Models\Sale','sale_id','id');
    }

    public function stocks() {
        return $this->hasMany('App\Models\Stock','stock_id','id');
    }

    public function brand() {
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
    }

    public function supplier() {
        return $this->belongsTo('App\Models\Supplier', 'supplier_id', 'id');
    }
}
