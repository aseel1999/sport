<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Subadmin extends Authenticatable
{
    use HasFactory,SoftDeletes,Translatable;
    public $translatedAttributes = ['name','description'];

    protected $hidden = [
        'translations', 'updated_at', 'deleted_at','created_at', 'password', 'remember_token'];

    public function getImageAttribute($value)
    {
        if (!is_null($value) && isset($value) && $value!=''){
            return url('uploads/images/subadmins/' . $value) ;
        }else{
            return url('uploads/images/subadmins/defualtUser.png');
        }
    }
    

    

    

    

    public function images(){
        return $this->hasMany(UserImage::class,'user_id' ,'id');
    }


    
    public function articles(){
        return $this->hasMany(Article::class,'user_id' ,'id');
    }
    public function details(){
        return $this->hasMany(Detail::class,'user_id' ,'id');
    }
    public function opinions(){
        return $this->hasMany(OpinionDetail::class,'user_id' ,'id');
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

        if (request()->has('type')) {
            if (request()->get('type') != null)
                $query->where('type', request()->get('type'));
        }


        
        if (request()->has('id')) {
            if (request()->get('id') != null)
                $query->where('id',  request()->get('id'));
        }


    }

}


