<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_detail extends Model
{
    use HasFactory;

     protected $fillable = [
        'spicy',
        'gluten_free',
        'kcal',
    ];

    public function foods(){
        return $this->belongsTo(Food::class);
    }

}
