<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $fillable = ['category_id' ];
    use HasFactory;
    protected  $table='article_categories';
    public function article(){
        return $this->belongsTo(Article::class,'article_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
