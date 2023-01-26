<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewwCategory extends Model
{
    protected $fillable = ['category_id' ];
    use HasFactory;
    protected  $table='new_categories';
    public function new(){
        return $this->belongsTo(Neww::class,'new_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
