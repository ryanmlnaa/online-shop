<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelDetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'detail-transaksis';
    public $timestamps = true;
    protected $fillable = [
        'id_transaksi',
        'product',
        'status',
    ];

    public function transaksi()
    {
        return $this->hasOne(transaksi::class, 'id_transaksi','id');

    }

    public function product()
    {
        return $this->hasone(product::class, 'product_id','id');

    }
}
