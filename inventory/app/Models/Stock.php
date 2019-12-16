<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'item_id',
        'ukuran',
        'jumlah',
    ];

    public function item() {
        return $this->belongsTo('App\Models\Item', 'item_id', 'id');
    }
}
