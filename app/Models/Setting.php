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

    public function getCategoriesCoverAttribute($logo)
    {
        return !is_null($logo)?url('uploads/images/settings/'.$logo):null;
    }


    public function getProjectsCoverAttribute($logo)
    {
        return !is_null($logo)?url('uploads/images/settings/'.$logo):null;
    }


    public function getContactCoverAttribute($logo)
    {
        return !is_null($logo)?url('uploads/images/settings/'.$logo):null;
    }


    public function getLoginImageAttribute($logo)
    {
        return !is_null($logo)?url('uploads/images/settings/'.$logo):null;
    }

public function getLogoImageAttribute($logo)
    {
        return !is_null($logo)?url('uploads/images/settings/'.$logo):null;
    }


}
