<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price',
        'status',
        'rating',
        'delivery_address',
        'delivery_contact',
        'costumer_name',
        'order_date'
    ];

    protected $casts = [
        'order_date' => 'datetime',
    ];

    public function foods() {
        return $this->belongsToMany(Food::class)->withPivot('quantity');
    }
}
