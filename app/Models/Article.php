<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['title','description'];
    public function getImageAttribute($value)
    {
        return url('uploads/images/articles/' . $value);
    }
    public function user(){
        return $this->belongsTo(SubAdmin::class,'user_id','id');
    }
    public function detail()
    {
        return $this->hasOne(Detail::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function scopeFilter($query)
    {
        if (request()->has('title')) {
            if (request()->get('title') != null)
                $query->where(function ($q) {
                    $q->whereTranslationLike('title', '%' . request()->get('title') . '%');
                });
        }
        if (request()->has('description')) {
            if (request()->get('description') != null)
                $query->where(function ($q) {
                    $q->whereTranslationLike('description', '%' . request()->get('description') . '%');
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
