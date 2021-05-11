<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillabel = [
        'name',
        'description',
        'price',
        'sku',
        'stock_amount',
        'client_id'
    ];
}
