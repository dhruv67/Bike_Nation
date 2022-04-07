<?php

namespace App\Modules\Colour\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    use HasFactory;
    protected $table = 'color';
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'status',
        'created_at',
        'updated_at',
    ];
}