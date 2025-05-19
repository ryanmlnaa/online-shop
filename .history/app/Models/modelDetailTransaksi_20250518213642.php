<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelDetailTransaksi extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'id_transaksi',
        'product',
    ];

    public function transaksi()
    {
        return $this->belongsto(transaksi::class)
    }
}
