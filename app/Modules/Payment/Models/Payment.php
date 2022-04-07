<?php

namespace App\Modules\Payment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Order\Models\Order;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'status'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'payment_id' , 'id');
    }
}
