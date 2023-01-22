<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewwImage extends Model
{
    use HasFactory;
    public function getImageAttribute($image)
    {
        return !is_null($image) ? url('uploads/images/news/' . $image) : url('uploads/images/news/d.jpg');
    }
}
