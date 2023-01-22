<?php

namespace App\Http\Controllers\WEB\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Language;
use App\Models\Video;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;
class VideoController extends Controller
{
    public function __construct()
    {
        $this->locales = Language::all();
        $this->settings = Setting::query()->first();
        view()->share([
            'locales' => $this->locales,
            'settings' => $this->settings,

        ]);
   
        $route=Route::currentRouteAction();
        $route_name = substr($route, strpos($route, "@") + 1);
        $this->middleware(function ($request, $next) use($route_name){

            if($route_name== 'index' ){
                if(can(['videoes-show' , 'videoes-create' , 'videoes-edit' , 'videoes-delete'])){
                    return $next($request);
                }
            }elseif($route_name== 'create' || $route_name== 'store'){
                if(can('videoes-create')){
                    return $next($request);
                }
            }elseif($route_name== 'edit' || $route_name== 'update'){
                if(can('videoes-edit')){
                    return $next($request);
                }
            }elseif($route_name== 'destroy' || $route_name== 'delete'){
                if(can('videoes-delete')){
                    return $next($request);
                }
            }else{
                return $next($request);
            }
            return redirect()->back()->withErrors(__('cp.you_dont_have_permission'));
        });

    }
    public function index()
    {
        $items = Video::orderBy('id', 'desc')->paginate($this->settings->paginateTotal);
        return view('admin.videoes.home', [
            'items' =>$items,
        ]);
    }
    public function create()
    {
       
        return view('admin.videoes.create');
    }
    public function store(Request $request)
    {
        {
            $roles = [
            ];
            $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_video_' . $locale] = 'required';
            $roles['url_' . $locale] = 'required';
            
        }
            $this->validate($request, $roles);
    
            $item= new Video();
            foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->name_video = $request->get('name_video_' . $locale);
            $item->translateOrNew($locale)->url = $request->get('url _' . $locale);
            
        } 
            $item->save();
            activity()->causedBy(auth('admin')->user())->log(' إضافة فيديو جديد');
            return redirect()->back()->with('status', __('cp.create'));
        }
        
    }
    public function edit($id){
            $item = Video::where('id',$id)->first();
            return view('admin.videoes.edit', [
                'item' => $item,
            ]);

        }
        public function update(Request $request, $id)
    {
        $roles = [
            
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_video_' . $locale] = 'required';
            $roles['url_' . $locale] = 'required';
           
        }

        $this->validate($request, $roles);

        $item = Video::query()->findOrFail($id);
        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->name_video = $request->get('name_video_' . $locale);
            $item->translateOrNew($locale)->url = $request->get('url_' . $locale);
        }
        $item->save();
        return redirect()->back()->with('status', __('cp.update'));
    }
    public function destroy($id)
    {
        
        $ad = Video::query()->findOrFail($id);
        if ($ad) {
            Video::query()->where('id', $id)->delete();
            return "success";
        }
        return "fail";
    }
}
