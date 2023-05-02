<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'PIVA',
        'prezzo_spedizione',
        'image',
        // 'avg_rating',
        // 'total_reviews',
        'user_id'
    ];

    protected $appends = ['full_image_restaurant'];

    protected $hidden = [
        'image',
    ];

    public function getFullImageRestaurantAttribute()
    {
        $fullPath = null;
        if ($this->image) {
            $fullPath = asset('storage/' . $this->image);
        }

        return $fullPath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    public function orders()
    {
        return $this->hasManyThrough(Order::class, Food::class, 'restaurant_id', 'id');
    }

    public function updateAvgRating()
    {
        $this->avg_rating = $this->orders()->whereNotNull('rating')->avg('rating');
        $this->save();
    }
}
