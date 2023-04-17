<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    // appends the return of getFullImgPathAttribute to the Project istance (use name from function get FullImagePath Attribute and conv to snake case)
    protected $appends = ['full_image_path'];

    // Hidden ONLY from query (hiding image so only full_image_path is visible from query)
    protected $hidden = [
        'image',
    ];

    // function to append image storage to use in front end with API
    public function getFullImagePathAttribute() {
        $fullPath = null;
        if ($this->image) {
            $fullPath = asset('storage/'.$this->image);
        }

        return $fullPath;
    }   

    public function restaurants() {
        return $this->belongsToMany(Restaurant::class);
    }
}
