<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['subtitle'];
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function scopeFilter($query)
    {
        if (request()->has('subtitle')) {
            if (request()->get('subtitle') != null)
                $query->where('subtitle', 'like', '%' . request()->get('subtitle') . '%');
        }
        if (request()->has('article_id')) {
            if (request()->get('article_id') != null)
                $query->whereTranslationLike('article_id','%' . request()->get('article_id') . '%');
        }
        if (request()->has('id')) {
            if (request()->get('id') != null)
                $query->where('id', request()->get('id'));
        }


       


    }


}
