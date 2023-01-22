<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\User;
use Intervention\Image\Facades\Image;
use App\Models\OpinionDetail;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;
class OpinionController extends Controller
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
        if(can('opinions')){
            return $next($request);
         }
          if($route_name== 'index' ){
             if(can(['opinions-show' , 'opinions-create', 'opinions-edit','opinions-delete'])){
                 return $next($request);
             }
             }elseif($route_name== 'edit' || $route_name== 'update'){
                if(can('articles-edit')){
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
        
        $items = OpinionDetail::filter()->orderBy('id', 'desc')->paginate(30);
        return view('admin.opinion_details.home', [
            'items' =>$items,
            
        ]);
    }


    public function show($id)
    {
        $item = OpinionDetail::where('id',$id)->first();
        return view('admin.opinion_details.show', [
            'item' =>$item,
        ]);
    }
    public function edit($id)
        {
            
            $item = OpinionDetail::where('id',$id);
            return view('admin.opinion_details.edit', [
                'item' => $item,
                
            ]);

        }
        public function update(Request $request, $id)
    {
        $roles = [
            'user_id' => 'required',
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['opinion_' . $locale] = 'required';
            $roles['day_' . $locale] = 'required';
        }
        $this->validate($request, $roles);

        $item = OpinionDetail::query()->findOrFail($id);
        $item->user_id = $request->user_id;
       

        foreach ($locales as $locale)
        {
        $item->translateOrNew($locale)->opinion = $request->get('opinion_' . $locale);
        }$item->translateOrNew($locale)->day = $request->get('day_' . $locale);
        
        $item->save();
        return redirect()->back()->with('status', __('cp.update'));
    }

    public function destroy($id)
    {
        $ad = OpinionDetail::query()->findOrFail($id);
        if ($ad) {
            OpinionDetail::query()->where('id', $id)->delete();

            return "success";
        }
        return "fail";
    }
}
