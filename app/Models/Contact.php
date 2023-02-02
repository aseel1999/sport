<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    protected $translatedAttributes=['translations' ,'name', 'email','title','message','phone'];
    
    protected $hidden = ['translations','updated_at'];


    public function scopeFilter($query)
    {
        if (request()->has('name') ) {
            if (request()->get('name') != null)
                $query->where('name', 'like', '%' . request()->get('name') . '%');
        }

        if (request()->has('email') ) {
            if (request()->get('email') != null)
                $query->where('email', 'like', '%' . request()->get('email') . '%');
        }

        if (request()->has('mobile') ) {
            if (request()->get('mobile') != null)
                $query->where('mobile', 'like', '%' . request()->get('mobile') . '%');
        }
        if (request()->has('title') ) {
            if (request()->get('title') != null)
                $query->where('title', 'like', '%' . request()->get('title') . '%');
        }


        if (request()->has('message') ) {
            if (request()->get('message') != null)
                $query->where('message', 'like', '%' . request()->get('message') . '%');
        }

        

    }
}
