<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\imageTrait;
use App\Models\Language;
use Intervention\Image\Facades\Image;
use App\Models\Opinion;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;
class OpinionController extends Controller
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
        if(can('opinions')){
            return $next($request);
         }
          if($route_name== 'index' ){
             if(can(['opinions-show' , 'opinions-create', 'opinions-edit','opinions-delete'])){
                 return $next($request);
             }
             }elseif($route_name== 'edit' || $route_name== 'update'){
                if(can('opinions-edit')){
                   return $next($request);
               }
          }elseif($route_name== 'destroy' || $route_name== 'delete'){
              if(can('opinions-delete')){
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
public function index()
    {
        $items =Opinion::filter()->orderBy('id', 'desc')->get();
        
        return view('admin.opinions.home', [
            'items' =>$items,
            
        ]);
    }


    public function create()
    {
        return view('admin.opinions.create');
    }
    public function store(Request $request){
        $roles = [
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
            

        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_author_' . $locale] = 'required';
            $roles['title_' . $locale] = 'required';
            $roles['detail_' . $locale] = 'required';
        }
        $this->validate($request, $roles);
        $item= new Opinion();
       

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->name_author = $request->get('name_author_' . $locale);
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->detail = $request->get('detail_' . $locale);
        } 
        if ($request->hasFile('image') && $request->image != '') {
            $item->image = $this->storeImage($request->image, 'opinions');
        }
        $item->save();
        activity()->causedBy(auth('admin')->user())->log(' إضافة رأي جديد ');
        return redirect()->back()->with('status', __('cp.create'));
        
        
    }
    public function edit($id)
        {
            
            $item = Opinion::findOrFail($id);
            return view('admin.opinions.edit', [
                'item' => $item,
                
            ]);

        }
        public function update(Request $request, $id)
    {
        $roles = [
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_author_' . $locale] = 'required';
            $roles['title_' . $locale] = 'required';
            $roles['detail_' . $locale] = 'required';
        }
        $this->validate($request, $roles);

        $item = Opinion::query()->findOrFail($id);

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->name_author = $request->get('name_author_' . $locale);
            $item->translateOrNew($locale)->title = $request->get('title_' . $locale);
            $item->translateOrNew($locale)->detail = $request->get('detail_' . $locale);
        }
        if ($request->hasFile('image') && $request->image != '') {
            $item->image = $this->storeImage($request->image, 'opinions' , $item->getRawOriginal('image') );
        }
        $item->save();
        return redirect()->back()->with('status', __('cp.update'));
    }

    public function destroy($id)
    {
        $ad = Opinion::query()->findOrFail($id);
        if ($ad) {
            Opinion::query()->where('id', $id)->delete();

            return "success";
        }
        return "fail";
    }
}
