<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price',
        'status',
        'rating',
        'delivery_address',
        'delivery_contact',
        'costumer_name',
    ];
}
