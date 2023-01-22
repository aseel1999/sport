<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['purposedetails'
    ,'ourpurpose','messagedetails','ourmessage','aboutdetails','aboutus'];
    protected $hidden = ['translations' , 'created_at','updated_at'];
    public function images()
    {
        return $this->hasMany(AboutImage::class, 'meal_id');
    }
    public function getImageAttribute($image)
    {
        return !is_null($image) ? url('uploads/images/meals/' . $image) : url('uploads/images/meals/d.jpg');
    }

}
