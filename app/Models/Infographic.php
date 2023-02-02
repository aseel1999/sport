<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infographic extends Model
{
    use HasFactory;
    public function getImageAttribute($image)
    {
        return !is_null($image) ? url('uploads/images/infographics/' . $image) : url('uploads/images/news/d.jpg');
    }
}
