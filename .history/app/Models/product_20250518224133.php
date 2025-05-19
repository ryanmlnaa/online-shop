<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
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
        'quantity_out',
        'foto',
        'is_active',
    ];
    protected $hidden;

}
