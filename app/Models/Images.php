<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'images';

    protected $fillable = [
        'name', 'images'
    ];

    protected $casts = [
        'images' => 'array'
    ];

    // public function setImagesAttribute($value)
    // {
    //     $this->attributes['images'] = json_encode($value);
    // }

    // public function getImagesAttribute($value)
    // {
    //     return json_decode($value, true);
    // }
}
