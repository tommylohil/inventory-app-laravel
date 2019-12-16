<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'nama',
        'nomor_telepon',
        'alamat',
    ];

    public function items() {
        return $this->hasMany('App\Models\items','item_id','id');
    }
}
