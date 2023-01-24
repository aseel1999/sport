<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory,Translatable;
    protected $translatedAttributes=['subtitle'];
    public function new()
    {
        return $this->belongsTo(Neww::class);
    }

    public function scopeFilter($query)
    {
        if (request()->has('subtitle')) {
            if (request()->get('subtitle') != null)
                $query->where('subtitle', 'like', '%' . request()->get('subtitle') . '%');
        }
        if (request()->has('new_id')) {
            if (request()->get('new_id') != null)
                $query->whereTranslationLike('new_id','%' . request()->get('new_id') . '%');
        }
        if (request()->has('id')) {
            if (request()->get('id') != null)
                $query->where('id', request()->get('id'));
        }


       


    }


}
