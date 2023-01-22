<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpinionDetail extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['day','opinion'];
    public function user(){
        return $this->belongsTo(Subadmin::class,'user_id','id')->withTrashed();
    }

}
