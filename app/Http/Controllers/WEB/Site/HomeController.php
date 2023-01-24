<?php

namespace App\Http\Controllers\WEB\Site;

use App\Http\Controllers\Controller;
use App\Models\Neww;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Video;
use App\Models\Infographic;
use App\Models\LandingPage;
use App\Models\Language;
use App\Models\NewwCategory;
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
        $news=Neww::get();
        $new=Neww::where('is_post','=','yes')->take(1)->first();
        $infographics=Infographic::orderBy('id', 'desc')->take(3)->get();
        $last_news=Neww::orderBy('id', 'desc')->take(4)->get();
        $video =Video::orderBy('id', 'asc')->take(1)->first();
        $videoes=Video::orderBy('id', 'desc')->take(2)->get();
        $new_categories=NewwCategory::get();
        return view('website.home',[
            'categories'=>$categories,
            'news'=>$news,
            'video'=>$video,
            'last_news'=>$last_news,
            'infographics'=>$infographics,
            'new_categories'=> $new_categories,
            'videoes'=>$videoes,
            'new'=>$new,
        ]);
    }




}
