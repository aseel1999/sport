<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Opinion extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['name_author','title','detail'];
    protected $hidden = ['translations' ,'updated_at'];
    protected $table='opinions';
    public function getImageAttribute($image)
    {
        return !is_null($image) ? url('uploads/images/opinions/' . $image) : url('uploads/images/news/d.jpg');
    }
    public function scopeFilter($query)
    {
        if (request()->has('name_author')) {
            if (request()->get('name_author') != null)
                $query->where(function ($q) {
                    $q->whereTranslationLike('name_author', '%' . request()->get('name_author') . '%');
                });
        }
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
