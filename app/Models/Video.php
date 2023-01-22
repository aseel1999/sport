<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['name_video','url'];
    protected $hidden = ['translations' ,'updated_at'];
    public function scopeFilter($query)
    {
        if (request()->has('name_video')) {
            if (request()->get('name_video') != null)
                $query->where(function ($q) {
                    $q->whereTranslationLike('name_video', '%' . request()->get('name_video') . '%');
                });
        }
    }
}
