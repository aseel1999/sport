<?php

namespace App\Http\Controllers\WEB\Admin;
use App\Models\Album;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Models\Language;
use App\Models\Setting;
class AlbumController extends Controller
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
                if(can(['albums-show' , 'albums-create' , 'albums-edit' , 'albums-delete'])){
                    return $next($request);
                }
            }elseif($route_name== 'create' || $route_name== 'store'){
                if(can('albums-create')){
                    return $next($request);
                }
            }elseif($route_name== 'edit' || $route_name== 'update'){
                if(can('albums-edit')){
                    return $next($request);
                }
            }elseif($route_name== 'destroy' || $route_name== 'delete'){
                if(can('albums-delete')){
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
        $items = Album::orderBy('id', 'desc')->paginate($this->settings->paginateTotal);
        return view('admin.albums.home', [
            'items' =>$items,
        ]);
    }
    public function create()
    {
       
        return view('admin.albums.create');
    }
    public function store(Request $request)
    {
        {
            $roles = [
            ];
            $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_album_' . $locale] = 'required';
            
        }
            $this->validate($request, $roles);
    
            $item= new Album();
            foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->name_album = $request->get('name_album' . $locale);
           
        } 
            $item->save();
            activity()->causedBy(auth('admin')->user())->log(' إضافة ألبوم جديد');
            return redirect()->back()->with('status', __('cp.create'));
        }
        
    }
    public function edit($id){
            $item = Album::where('id',$id)->first();
            return view('admin.albums.edit', [
                'item' => $item,
            ]);

        }
        public function update(Request $request, $id)
    {
        $roles = [
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_album' . $locale] = 'required';
        }
        $this->validate($request, $roles);

        $item = Album::query()->findOrFail($id);
        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->name_album = $request->get('name_album_' . $locale);
            
        }
        activity($item->name_album)->causedBy(auth('admin')->user())->log(' تعديل الألبوم');

        $item->save();
        return redirect()->back()->with('status', __('cp.update'));
    }
    public function destroy($id)
    {
        
        $ad = Album::query()->findOrFail($id);
        if ($ad) {
            Album::query()->where('id', $id)->delete();
            return "success";
        }
        return "fail";
    }
}
