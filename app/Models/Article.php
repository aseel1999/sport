<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Article extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['title','detail','subtitle'];
    protected $hidden = ['translations' ,'updated_at'];
    protected $table='articles';
    protected $fillable=['views'];
    
    public function getImageAttribute($image)
    {
        return !is_null($image) ? url('uploads/images/news/' . $image) : url('uploads/images/d.jpg');
    }
    
    public function sport(){
        return $this->belongsTo(Sport::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function images()
    {
        return $this->morphMany(ArticleImage::class, 'object', 'object_type', 'object_id', 'id');
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
