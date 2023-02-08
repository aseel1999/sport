<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
//    use Translatable;
//    public $translatedAttributes = ['title','description','address','key_words'];
    public $guarded = [];
//    protected $appends = ['privacy','terms','aboutus'];
    protected $hidden=['translations','updated_at','deleted_at'];

    public function getAppLogoAttribute($logo)
    {
        return !is_null($logo)?url('uploads/images/settings/'.$logo):null;
    }
    public function getBannerHeaderAttribute($logo)
    {
        return !is_null($logo)?url('uploads/images/settings/'.$logo):null;
    }


    public function getAdAttribute($logo)
    {
        return !is_null($logo)?url('uploads/images/settings/'.$logo):null;
    }


    public function getLoginImageAttribute($logo)
    {
        return !is_null($logo)?url('uploads/images/settings/'.$logo):null;
    }




}
