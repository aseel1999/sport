<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['name_album'];
    protected $hidden = ['translations' ,'updated_at'];
    public function scopeFilter($query)
    {
        if (request()->has('name_album')) {
            if (request()->get('name_album') != null)
                $query->where(function ($q) {
                    $q->whereTranslationLike('name_album', '%' . request()->get('name_album') . '%');
                });
        }
    }

}
