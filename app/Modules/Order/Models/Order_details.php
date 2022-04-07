<?php

namespace App\Modules\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Product\Models\Product;

class Order_details extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'total_quantity',
        'total_price',
        'created_at',
        'updated_at'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id' , 'id');
    }  
}
