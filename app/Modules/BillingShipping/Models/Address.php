<?php

namespace App\Modules\BillingShipping\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'address';
    protected $fillable = [
        'id',
        'users_id',
        'first_name',
        'last_name',
        'email',
        'pincode',
        'city',
        'state',
        'country',
        'mobile_number',
        'address'
    ];
}
