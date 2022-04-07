<?php

namespace App\Modules\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Modules\BillingShipping\Models\Address;
use App\Models\User;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'id',
        'users_id',
        'billing_id',
        'shipping_id',
        'payment_id',
        'total_price',
        'total_quantity',
        'order_status',
        'created_at',
        'updated_at'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id' , 'id');
    }

    public function bid()
    {
        return $this->belongsTo(Address::class, 'billing_id' , 'id');
    }

    public function sid()
    {
        return $this->belongsTo(Address::class, 'shipping_id' , 'id');
    }

    // public function address()
    // {
    //     return $this->belongsTo(Address::class, 'shipping_id' , 'id');
    // }
}
