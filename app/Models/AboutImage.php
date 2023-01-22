<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutImage extends Model
{
    use HasFactory;
    public function getImageAttribute($image)
    {
        return !is_null($image) ? url('uploads/images/meals/' . $image) : url('uploads/images/meals/d.jpg');
    }

}
