<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Page extends Model
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['title', 'description'];
    protected $hidden=['translations','updated_at','deleted_at'];



    protected $fillable = ['image'];


    public function getImageAttribute($value)
    {
        return !is_null($value) ? url('uploads/pages/' . $value) : url('uploads/images/d.png');
    }

    public function getSecondImageAttribute($value)
    {
        return !is_null($value) ? url('uploads/pages/' . $value) : url('uploads/images/d.png');
    }

    public function getOurVisionImageAttribute($value)
    {
        return !is_null($value) ? url('uploads/pages/' . $value) : url('uploads/images/d.png');
    }

    public function getOurMissionImageAttribute($value)
    {
        return !is_null($value) ? url('uploads/pages/' . $value) : url('uploads/images/d.png');
    }


}
