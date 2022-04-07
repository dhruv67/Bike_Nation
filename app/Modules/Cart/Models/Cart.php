<?php

namespace App\Modules\Cart\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Product\Models\Product;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = [
        'id',
        'product_id',
        'users_id',
        'product_stock',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id' , 'id');
    }   
}

