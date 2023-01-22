<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCodeUser extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(Subadmin::class,'user_id','id');
    }

    public function promo_code(){
        return $this->belongsTo(PromoCode::class,'promo_code_id','id');
    }
}
