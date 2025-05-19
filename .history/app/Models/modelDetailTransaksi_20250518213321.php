<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelDetailTransaksi extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'product_id',
        'product_name',
        'product_brand',
        'gender',
        'price',
        'description',
        'primary_color',
        'jenis_pakaian',
        'discount',
        'quantity',
        'foto',
        'is_active',
    ];
}
