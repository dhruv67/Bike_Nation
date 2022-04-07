<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Cart\Models\Cart;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'id',
        'name',
        'image',
        'upc',
        'url',
        'color_id',
        'category_id',
        'users_id',
        'price',
        'stock',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }   
}
