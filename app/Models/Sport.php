<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Sport extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['sport_name'];


    protected $hidden = ['translations' ,'updated_at','deleted_at'];
    public function articles(){
        return $this->hasMany(Article::class);
    }
    public function scopeFilter($query)
    {
        if (request()->has('sport_name')) {
            if (request()->get('sport_name') != null)
                $query->where('sport_name', 'like', '%' . request()->get('sport_name') . '%');
        }
        
        if (request()->has('id')) {
            if (request()->get('id') != null)
                $query->where('id', request()->get('id'));
        }


       


    }


}
