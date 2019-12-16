<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'nama',
        'asal_negara',
    ];

    public function items() {
        return $this->hasMany('App\Models\items','item_id','id');
    }
}
