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
    ];

    public function foods() {
        return $this->belongsTo(Food::class);
    }
}
