<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'product_name',
        'description',
        'category',
        'supplier',
        'product_model',
        'supplier_price',
        'sell_price',
        'product_per_cartoon'
    ];
}