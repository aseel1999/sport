<?php

namespace App\Models;


use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens,SoftDeletes,Translatable;
    protected $table='users';
    //   protected $appends = [''];

    public function getImageAttribute($value)
    {
        if (!is_null($value) && isset($value) && $value!=''){
           return url('uploads/images/users/' . $value) ;
        }else{
           return url('uploads/images/users/defualtUser.png');
        }
   }
    
    public function images(){
        return $this->hasMany(UserImage::class);
    }
    public function scopeFilter($query)
    {
        if (request()->has('email')) {
            if (request()->get('email') != null)
                $query->where('email', 'like', '%' . request()->get('email') . '%');
        }
        if (request()->has('name')) {
            if (request()->get('name') != null)
                $query->whereTranslationLike('name','%' . request()->get('name') . '%');
        }
        if (request()->has('user_name')) {
            if (request()->get('user_name') != null)
                $query->where('user_name', 'like', '%' . request()->get('user_name') . '%');
        }

        if (request()->has('mobile')) {
            if (request()->get('mobile') != null)
                $query->where('mobile', 'like', '%' . request()->get('mobile') . '%');
        }
        if (request()->has('status')) {
            if (request()->get('status') != null)
                $query->where('status', request()->get('status'));
        }
        if (request()->has('id')) {
            if (request()->get('id') != null)
                $query->where('id', request()->get('id'));
        }


       


    }

}
