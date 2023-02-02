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
use App\Models\Opinion;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
       
       $newws =Article::where('views','>=','5')->take(4)->get();
        $new_big=Article::orderBy('id', 'desc')->take(3)->first();
        $infographics=Infographic::orderBy('id', 'desc')->take(3)->get();
        $last_news=Article::orderBy('id', 'desc')->take(5)->get();
        $video =Video::orderBy('id', 'asc')->take(1)->first();
        $videoes=Video::orderBy('id', 'desc')->take(2)->get();
        $category1=Category::where('id','1')->first();
        $category2=Category::where('id','2')->first();
        $category3=Category::where('id','3')->first();
        $sport=Article::where('sport_id','1')->orWhere('sport_id','2')
        ->orWhere('sport_id','3')->orWhere('sport_id','4')->orWhere('sport_id','5')->first();
       
        $new2=Article::where('category_id',$category2->id)->orderBy('id' , 'desc')->take(1)->first();
        $news2=Article::where('category_id',$category2->id)->orderBy('id', 'desc')->take(4)->get();

        $new1=Article::where('category_id',$category1->id)->orderBy('id', 'desc')->take(1)->first();
        $news=Article::where('category_id',$category1->id)->orderBy('id', 'desc')->take(4)->get();

        $new3=Article::where('category_id',$category3->id)->orderBy('id', 'desc')->take(1)->first();
        $news3=Article::where('category_id',$category3->id)->orderBy('id', 'desc')->take(3)->get();
        $sports=Article::where('sport_id','1')->orWhere('sport_id','2')
        ->orWhere('sport_id','3')->orWhere('sport_id','4')->orWhere('sport_id','5')->orderBy('id', 'desc')->take(3)->get();
        $post_news=Article::where('category_id','2')->where('is_post','yes')->orderBy('id', 'desc')->take(5)->get();

        $opinions=Opinion::orderBy('id','desc')->take(4)->get();
       
        return view('website.home',[
            'categories'=>$categories,
            'newws'=>$newws,
            'news'=>$news,
            'video'=>$video,
            'last_news'=>$last_news,
            'infographics'=>$infographics,
            'videoes'=>$videoes,
            'category1'=>$category1,
            'category2'=>$category2,
            'category3'=>$category3,
            'sport'=>$sport,
            'new1'=>$new1,
            'new2'=>$new2,
            'news2'=>$news2,
            'new3'=>$new3,
            'news3'=>$news3,
            'opinions'=>$opinions,
            'sports'=>$sports,
            'new_big'=>$new_big,
            'post_news'=>$post_news,
            
        ]);
        
    }
    public function contact()
    {
        return view('website.contact.index');
    }
    public function contactUs(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone'=>'required',
            'title' => 'required',
            'message' => 'required',

        ]);
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->title = $request->input('title');
        $contact->message = $request->input('message');

        $contact->save();
        return redirect()->back();

}
public function privacy(){
    return view('website.privacy.index');
}
public function terms(){
    return view('website.term.index');
}
public function notfound(){
    return view('errors.404');
}
public function opinions(){
    $opinions=Opinion::get();
    return view('website.opinion.opinions',[
             'opinions'=>$opinions,

             ]);
   }
   public function opinionDetail($id){
    $opinion=Opinion::where('id',$id)->first();
    $articles=Article::orderBy('id', 'desc')->take(6)->get();
    return view('website.opinion.opinion-details',[
        'opinion'=>$opinion,
        'articles'=>$articles,
    ]);
   }
   public function infographic(){
    $infographics=Infographic::orderBy('id','desc')->take(12)->get();
    return view ('website.infographic',[
        'infographics'=>$infographics,
    ]);
   }
   public function about(){
    return view('website.about');
   }
   public function locale(){
    $articles=Article::where('category_id','1')->orderBy('id','desc')->take(15)->get();
    return view('website.locale',[
        'articles'=>$articles
    ]);
   }
}