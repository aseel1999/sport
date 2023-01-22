<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use App\Models\Detail;

class DetailController extends Controller
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
                if(can(['details-show' , 'details-create' , 'details-edit' , 'details-delete'])){
                    return $next($request);
                }
            }elseif($route_name== 'create' || $route_name== 'store'){
                if(can('details-create')){
                    return $next($request);
                }
            }elseif($route_name== 'edit' || $route_name== 'update'){
                if(can('details-edit')){
                    return $next($request);
                }
            }elseif($route_name== 'destroy' || $route_name== 'delete'){
                if(can('details-delete')){
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
       
        $items = Detail::filter()->orderBy('id', 'desc')->paginate($this->settings->paginateTotal);
        return view('admin.details.home', [
            'items' =>$items,
            
        ]);
    }


    public function create()
    {
       
        return view('admin.details.create');
    }


    public function store(Request $request)
    {
        $roles = [
            'status'=>'required',
            'article_id'=>'required',
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['subtitle_' . $locale] = 'required';
            
        }
        $this->validate($request, $roles);

        $item= new Detail();
        
        $item->article_id=$request->article_id;
        $item->status=$request->status;

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->subtitle = $request->get('subtitle_' . $locale);
            
        } 
        
        $item->save();
        activity()->causedBy(auth('admin')->user())->log(' إضافة تفاصيل مقالة جديد ');
        return redirect()->back()->with('status', __('cp.create'));
    }


    public function edit($id)
    {
       
        $item = Detail::where('id',$id)->first();
        return view('admin.details.edit', [
            'item' => $item,
            
        ]);
    }

    public function update(Request $request, $id)
    {
        $roles = [
            'status'=>'required',
            'article_id'=>'required',
            
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['subtitle_' . $locale] = 'required';
            
        }
        $this->validate($request, $roles);

        $item = Detail::query()->findOrFail($id);
        $item->article_id=$request->article_id;
       

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->subtitle = $request->get('subtitle_' . $locale);
            
        }
        

        activity()->causedBy(auth('admin')->user())->log('تعديل تفاصيل المقالة');

        $item->save();
        return redirect()->back()->with('status', __('cp.update'));
    }

    

    public function destroy($id)
    {
        //
        $ad = Detail::query()->findOrFail($id);
        if ($ad) {
            Detail::query()->where('id', $id)->delete();

            return "success";
        }
        return "fail";
    }

}
