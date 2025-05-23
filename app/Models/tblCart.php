<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblCart extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'idUser',
        'product_id',
        'qty',
        'price',
        'status',
    ];

    public function product()
    {
        return $this->hasOne(product::class, 'id', 'product_id');
    }
}