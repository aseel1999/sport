<?php

namespace App\Http\Controllers\WEB\Site;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Video;
use App\Models\Infographic;
use App\Models\LandingPage;
use App\Models\Language;
use App\Models\ArticleCategory;
use App\Models\Page;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share([
            'locales' => $this->locales,
            'settings' => $this->settings,

        ]);
    }


    public function index()
    {
       $categories=Category::get();
       $newws =Article::where('views','>=','5')->take(3)->get();
        $new=Article::where('is_post','=','yes')->take(1)->first();
        $new_big=Article::orderBy('id', 'desc')->take(3)->first();
        $infographics=Infographic::orderBy('id', 'desc')->take(3)->get();
        $last_news=Article::orderBy('id', 'desc')->take(4)->get();
        $video =Video::orderBy('id', 'asc')->take(1)->first();
        $videoes=Video::orderBy('id', 'desc')->take(2)->get();
        $category1=Category::where('id','1')->first();
        $category2=Category::where('id','2')->first();
        $category3=Category::where('id','3')->first();
        $category4=Category::where('id','4')->first();
        $new2=ArticleCategory::with('article')->where('category_id',$category2->id)->take(1)->first();
        $news2=ArticleCategory::with('article')->where('category_id',$category2->id)->take(3)->get();

        $new1=ArticleCategory::with('article')->where('category_id',$category1->id)->take(1)->first();
        $news=ArticleCategory::with('article')->where('category_id',$category1->id)->take(3)->get();

        $new3=ArticleCategory::with('article')->where('category_id',$category3->id)->take(1)->first();
        $news3=ArticleCategory::with('article')->where('category_id',$category3->id)->take(3)->get();

        $new4=ArticleCategory::with('article')->where('category_id',$category4->id)->take(1)->first();
        $news4=ArticleCategory::with('article')->where('category_id',$category4->id)->take(3)->get();

        $new_categories=ArticleCategory::get();
        
        return view('website.home',[
            'categories'=>$categories,
            'newws'=>$newws,
            'news'=>$news,
            'video'=>$video,
            'last_news'=>$last_news,
            'infographics'=>$infographics,
            'new_categories'=> $new_categories,
            'videoes'=>$videoes,
            'new'=>$new,
            'category1'=>$category1,
            'category2'=>$category2,
            'category3'=>$category3,
            'category4'=>$category4,
            'new1'=>$new1,
            'new2'=>$new2,
            'news2'=>$news2,
            'new3'=>$new3,
            'news3'=>$news3,
            'new4'=>$new4,
            'news4'=>$news4,
            'new_big'=>$new_big
        ]);
        
    }




}
