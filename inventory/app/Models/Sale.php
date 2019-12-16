<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'nomor_nota',
        'customer_id',
        'item_id',
        'ukuran',
        'jumlah_barang',
        'total_harga',
    ];
}
