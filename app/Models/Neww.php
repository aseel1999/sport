<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Neww extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['title','detail'];
    protected $hidden = ['translations' ,'updated_at'];
    protected $table='news';
    public function detail(){
        return $this->hasOne(Neww::class);
    }
    public function categories()
    {
        return $this->belongsTo(NewwCategory::class);
    }
    public function images()
    {
        return $this->hasMany(NewwImage::class, 'neww_id');
    }
    public function scopeFilter($query)
    {
        if (request()->has('title')) {
            if (request()->get('title') != null)
                $query->where(function ($q) {
                    $q->whereTranslationLike('title', '%' . request()->get('title') . '%');
                });
        }
        if (request()->has('detail')) {
            if (request()->get('detail') != null)
                $query->where(function ($q) {
                    $q->whereTranslationLike('detail', '%' . request()->get('detail') . '%');
                });
        }
        if (request()->has('id')) {
            if (request()->get('id') != null)
                $query->where(function ($q) {
                    $q->whereTranslationLike('id', '%' . request()->get('id') . '%');
                });
        }

    }
}
