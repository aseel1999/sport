<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Language;
use App\Traits\imageTrait;
use Intervention\Image\Facades\Image;
use App\Models\Setting;
use App\Models\Article;
use App\Models\ArticleImage;
use App\Models\Category;
use App\Models\Sport;
use Carbon\Carbon;



class ArticleController extends Controller
{
    use imageTrait;
    public function __construct()
    {
        $this->settings = Setting::query()->first();
        view()->share([
            'settings' => $this->settings,

        ]);

         $route=Route::currentRouteAction();
         $route_name = substr($route, strpos($route, "@") + 1);
         $this->middleware(function ($request, $next) use($route_name){
            if(can('news')){
                return $next($request);
             }
          if($route_name== 'index' ){
             if(can(['news-show' , 'news-create' , 'news-edit' , 'news-delete'])){
                 return $next($request);
             }
          }elseif($route_name== 'create' || $route_name== 'store'){
              if(can('news-create')){
                 return $next($request);
             }
          }elseif($route_name== 'edit' || $route_name== 'update'){
              if(can('news-edit')){
                 return $next($request);
             }
          }elseif($route_name== 'destroy' || $route_name== 'delete'){
              if(can('news-delete')){
                 return $next($request);
             }
          }else{
              return $next($request);
          }
          if($request->ajax()){
            $message = __('cp.you_dont_have_premession');
            return response()->json(['status' => false, 'code' => 503, 'message' => $message, ]);
          }else{
            return redirect()->back()->withErrors(__('cp.you_dont_have_premession'));
          }
        });
    }

    public function index(Request $request)
    {
        
        $items =Article::filter()->orderBy('id', 'desc')->paginate($this->settings->paginateTotal);
        
        return view('admin.news.home', [
            'items' =>$items,
            
        ]);

    }


    public function create()
    {
        
        $categories=Category::get();
        $sports=Sport::get();
        return view('admin.news.create', [
            'categories'=>$categories,
            'sports'=>$sports,
        ]);}


    public function store(Request $request)
    {
        
        $roles = [
            
            
            'is_post'=>'required',
            'image' => 'image|mimes:jpeg,jpg,png,gif',
            'category_id'=>'required',
            'sport_id'=>'required',


        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['detail_' . $locale] = 'required';
            $roles['subtitle_' . $locale] = 'required';
        }
        $this->validate($request, $roles);
        $item= new Article();
        
        $item->is_post=$request->is_post;
        $item->category_id=$request->category_id;
        $item->sport_id=$request->sport_id;
        $item->image=$request->image;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->detail = $request->get('detail_' . $locale);
            $item->translateOrNew($locale)->subtitle = $request->get('subtitle_' . $locale);
        } 
        if ($request->hasFile('image') && $request->image != '') {
            $item->image = $this->storeImage($request->image, 'news');
        }
        $item->save();
        
        if($request->has('filename')  && !empty($request->filename))
        {
            foreach($request->filename as $one)
            {
                if (isset(explode('/', explode(';', explode(',', $one)[0])[0])[1])) {
                    $fileType = strtolower(explode('/', explode(';', explode(',', $one)[0])[0])[1]);
                    $name = "" .str_random(8) . "" .  "" . time() . "" . rand(1000000, 9999999);
                    $attachType = 0;
                    if (in_array($fileType, ['jpg','jpeg','png','pmb'])){
                        $newName = $name. ".jpg";
                        $attachType = 1;
                        Image::make($one)->resize(800, null, function ($constraint) {$constraint->aspectRatio();})->save("uploads/images/news/$newName");
                    }
                    $image=new ArticleImage();
                    $image->article_id=$item->id;
                    $image->image = $newName;
                    $image->url='news/'.$newName;
                    $item->images()->save($image);
                }
            }
        }
        activity()->causedBy(auth('admin')->user())->log(' ?????????? ?????? ???????? ');
        return redirect()->back()->with('status', __('cp.create'));
    }


    public function edit($id)
        {
           
        $item = Article::where('id',$id)->first();
        $categories=Category::get();
        $sports=Sport::get();
            return view('admin.news.edit', [
                'item' => $item,
                'categories'=>$categories,
                'sports'=>$sports,

            ]);

        }


    public function update(Request $request, $id)
    {
        
        $roles = [
            
            
            'is_post'=>'required',
            'image' => 'image|mimes:jpeg,jpg,png,gif',
            'category_id'=>'required',
            'sport_id'=>'required',
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['detail_' . $locale] = 'required';
            $roles['subtitle_' . $locale] = 'required';
        }
        $this->validate($request, $roles);

        $item = Article::query()->findOrFail($id);
        
       
       $item->is_post=$request->is_post;
       $item->category_id=$request->category_id;
       $item->sport_id=$request->sport_id;
       

        foreach ($locales as $locale)
        {
        $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
        $item->translateOrNew($locale)->detail= $request->get('detail_' . $locale);
        $item->translateOrNew($locale)->subtitle = $request->get('subtitle_' . $locale);
        }
        if ($request->hasFile('image') && $request->image != '') {
            $item->image = $this->storeImage($request->image, 'news' , $item->getRawOriginal('image') );
        }
        $item->save();
       
        $imgsIds = $item->images->pluck('id')->toArray();
        $newImgsIds = ($request->has('oldImages'))? $request->oldImages:[];
        $diff = array_diff($imgsIds,$newImgsIds);
        ArticleImage::whereIn('id',$diff)->delete();

        if($request->has('filename')  && !empty($request->filename))
        {
            foreach($request->filename as $one)
            {
                if (isset(explode('/', explode(';', explode(',', $one)[0])[0])[1])) {
                    $fileType = strtolower(explode('/', explode(';', explode(',', $one)[0])[0])[1]);
                    $name = "" .str_random(8) . "" .  "" . time() . "" . rand(1000000, 9999999);
                    $attachType = 0;
                    if (in_array($fileType, ['jpg','jpeg','png','pmb'])){
                        $newName = $name. ".jpg";
                        $attachType = 1;
                        Image::make($one)->resize(800, null, function ($constraint) {$constraint->aspectRatio();})->save("uploads/images/news/$newName");
                    }
                    $image=new ArticleImage();
                    $image->article_id=$item->id;
                    $image->image = $newName;
                    $image->url='news/'.$newName;
                    $item->images()->save($image);
                }
            }
        }
        
        
        
        return redirect()->back()->with('status', __('cp.update'));
    }


    public function destroy($id)
    {
        //
        $ad = Article::query()->findOrFail($id);
        if ($ad) {
            Article::query()->where('id', $id)->delete();

            return "success";
        }
        return "fail";
    }
    
    
    public function details($id){
       $new=Article::where('id',$id)->first();
       $articles=Article::orderBy('id','desc')->take(6)->get();
       $new->update([
        'views'=>$new->views+1

       ]);
       
       return view ('website.details
       ',[
        'new'=>$new,
        'articles'=>$articles,
       ]);
    }
}
