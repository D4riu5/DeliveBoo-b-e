<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'name',
        'image',
        'description',
        'price',
        'is_available',
        'course',
    ];

    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }

    public function food_detail(){
        return $this->hasOne(Food_detail::class);
    }
}
