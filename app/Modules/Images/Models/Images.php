<?php

namespace App\Modules\Images\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $table = 'image';
    protected $fillable = [
        'id',
        'product_id',
        'imagenames',
        'sortnumber',
        'created_at',
        'updated_at',
    ];
    // protected $casts = [
    //     'imagenames' => 'array',
    //     'sortnumber' => 'string',
    // ];

    // public function setFilenamesAttribute($value)
    // {
    //     $this->attributes['imagenames'] = json_encode($value);
    // }
}
