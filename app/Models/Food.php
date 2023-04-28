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

    protected $appends = ['full_image_food'];

    protected $hidden = [
        'image',
    ];

    public function getFullImageFoodAttribute() {
        $fullPath = null;
        if ($this->image) {
            $fullPath = asset('storage/'.$this->image);
        }

        return $fullPath;
    }

    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }

    public function food_detail(){
        return $this->hasOne(Food_detail::class);
    }
    
    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
    
}
