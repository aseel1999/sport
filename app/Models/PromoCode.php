<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Session;

class PromoCode extends Model
{
    use HasFactory,SoftDeletes;

    public function users(){
        return $this->hasMany(PromoCodeUser::class);
    }
    public function scopeFilter($query)
    {
        if (request()->has('status')) {
            if (request()->get('status') != null)
                $query->where('status',  request()->get('status'));
        }

        if (request()->has('id')) {
            if (request()->get('id') != null)
                $query->where('id',  request()->get('id'));
        }

        if (request()->has('name')) {
            if (request()->get('name') != null)
                $query->where(function($q)
                {$q->where('name','like', '%'. request()->get('name').'%');
                });
        }
        if (request()->has('user_id')) {
            if (request()->get('user_id') != null)
                $query->where(function($q){
                    $q->where('user_id', request()->get('user_id'));
                });
        }

        if (request()->has('userIds')) {
            if (request()->get('userIds') != null &&count(request()->get('userIds')) > 0)
                $query->whereHas('users',function ($q) {
                    $q->whereIn('user_id',  request()->get('userIds'));
                });
        }


    }

}
