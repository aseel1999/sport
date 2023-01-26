<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Article extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['title','detail'];
    protected $hidden = ['translations' ,'updated_at'];
    protected $table='articles';
    protected $fillable=['views'];
    public function getImageAttribute($value)
    {
        if ($value) {
            if (filter_var($value, FILTER_VALIDATE_URL) === FALSE) {
                return url('uploads/images/news/' . $value);
            } else {
                return $value;
            }
        } else {
            return url('uploads/images/users/defualtUser.jpg');
        }
    }
    public function detail(){
        return $this->hasOne(Article::class);
    }
    public function categories()
    {
        return $this->hasMany(ArticleCategory::class);
    }
    public function images()
    {
        return $this->hasMany(ArticleImage::class, 'article_id');
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
