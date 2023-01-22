<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewwCategory extends Model
{
    use HasFactory;
    protected  $table='new_categories';
    public function new(){
        return $this->belongsTo(Neww::class,'neww_id');
    }
    public function category(){
        return $this->belongsTo(Cateory::class,'category_id');
    }
}
