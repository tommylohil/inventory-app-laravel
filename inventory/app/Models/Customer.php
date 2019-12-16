<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'nama',
        'nomor_telepon',
        'alamat',
        'total_kunjungan',
    ];
}
