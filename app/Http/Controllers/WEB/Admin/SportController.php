<?php

namespace App\Http\Controllers\WEB\Admin;


use App\Exports\UsersExport;
use App\Models\Setting;
use App\Models\Token;
use App\Models\Sport;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Image;
use App\Models\Language;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class SportController extends Controller
{
    public function __construct()
    {
        $this->settings = Setting::query()->first();
        view()->share([
            'settings' => $this->settings,
        ]);

        $route=Route::currentRouteAction();
        $route_name = substr($route, strpos($route, "@") + 1);
        $this->middleware(function ($request, $next) use($route_name){
            if(can('sports')){
                return $next($request);
            }
            if($route_name== 'index' ){
                if(can(['sports-show' , 'sports-create' ,  'sports-edit' , 'sports-delete'])){
                    return $next($request);
                }
            }elseif($route_name== 'edit' || $route_name== 'update'){
                if(can('sports-edit')){
                    return $next($request);
                }
            }elseif($route_name== 'destroy' || $route_name== 'delete'){
                if(can('sports-delete')){
                    return $next($request);
                }
            }else{
                return $next($request);
            }
            return redirect()->back()->withErrors(__('cp.you_dont_have_permission'));
        });
    }

    public function index(Request $request)
    {
        $items = Sport::query()->filter()->orderBy('id', 'desc')->paginate($this->settings->paginateTotal);
        return view('admin.sports.home', [
            'items' => $items,
        ]);


    }

    public function create()
    {
       return view('admin.sports.create');
    }


    


    

    public function store(Request $request)
    {
        {
            $roles = [
                
                
            ];
            $locales = Language::all()->pluck('lang');
            foreach ($locales as $locale) {
                $roles['sport_name_' . $locale] = 'required';
                
            }
            $this->validate($request, $roles);
    
            $item= new Sport();
            
            
    
            foreach ($locales as $locale)
            {
                $item->translateOrNew($locale)->sport_name = $request->get('sport_name_' . $locale);
                
            } 
            
            $item->save();
            activity($item->sport_name)->causedBy(auth('admin')->user())->log(' إضافة رياضة  جديد ');
            return redirect()->back()->with('status', __('cp.create'));
        }

    }


    public function edit($id)
    {

        $item = Sport::findOrFail($id);
        return view('admin.sports.edit', [
            'item' => $item,
        ]);
    }

    public function update(Request $request, $id)
    {
         $roles = [
            
            
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['sport_name_' . $locale] = 'required';
          
        }
        $this->validate($request, $roles);

        $item = Sport::query()->findOrFail($id);
        
       

        foreach ($locales as $locale)
        {
            $item->translateOrNew($locale)->sport_name = $request->get('sport_name_' . $locale);
            
        
        }
        activity($item->sport_name)->causedBy(auth('admin')->user())->log(' تعديل الرياضة ');

        $item->save();
        return redirect()->back()->with('status', __('cp.update'));
    }


    


    
    public function destroy($id)
    {
        $item = Sport::query()->findOrFail($id);
        if ($item) {
            Sport::query()->where('id', $id)->delete();
            return "success";
        }
        return "fail";
    }

}
