<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Resources\ProductResource;
use App\Models\Bill;
use App\Models\Cuisine;
use App\Models\Day;
use App\Models\Gift;
use App\Models\JoinRequest;
use App\Models\Meal;
use App\Models\Setting;
use App\Models\Subadmin;
use App\Models\Subscription;
use App\Models\Page;
use App\Models\Contact;
use App\Models\Time;
use App\Models\User;
use App\Models\UserSearch;
use App\Models\Wallet;
use App\Models\Banner;
use App\Models\Token;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;


class AppController extends Controller
{

    protected $paginateTotal = '';
    protected $settings = '';

    public function __construct()
    {
        $this->settings = Setting::orderBy('id', 'desc')->first();
        $this->paginateTotal = $this->settings->paginateTotal;
    }


    public function home(Request $request){
        $validator = Validator::make($request->all(), [
            'zoom' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'code' => 200,
                'message' => implode("\n",$validator-> messages()-> all()) ]);
        }

        $items = Subadmin::query()->filter()->where('status','active');

        $ids = [];
        if (request()->get('food_truck_only') != null) {
            if (request()->get('food_truck_only') == '1') { // Restaurant Only
                $current_ids = Subadmin::where('type', '3')->pluck('id')->toArray();
                $ids = array_merge($ids, $current_ids);
            }
        }

        if (request()->get('restaurant_only') != null) {
            if (request()->get('restaurant_only') == '1') { // Restaurant Only
                $current_ids = Subadmin::where('type', '2')->pluck('id')->toArray();
                $ids = array_merge($ids, $current_ids);
            }
        }

        if (request()->has('only_open')) {
            if (request()->get('only_open') != null)
                if (request()->get('only_open') == '1') { // Only Open
                    $current_ids = Subadmin::where('opening_status', '1')->pluck('id')->toArray();
                    $ids = array_merge($ids, $current_ids);
                }
        }

        if (request()->has('only_available_pick_up')) {
            if (request()->get('only_available_pick_up') != null)
                if (request()->get('only_available_pick_up') == '1') { // Only Open
                    $current_ids = Subadmin::where('accept_pick_up','1')->pluck('id')->toArray();
                    $ids = array_merge($ids, $current_ids);
                }
        }

        if (count($ids) > 0){
            $items->whereIn('id',$ids);
        }

        $ddistance=0;
        if($request->zoom<=10){
            $ddistance=100;
        }else if($request->zoom<=11) {
            $ddistance=80;
        }else if($request->zoom<=12){
            $ddistance=60;
        }else if($request->zoom<=13){
            $ddistance=30;
        }else if($request->zoom<=14){
            $ddistance=10;
        }else if($request->zoom<=15){
            $ddistance=8;
        }else if($request->zoom<=16){
            $ddistance=5;

        }else {
            $ddistance=1;
        }

        $items=$items->where('status','active')->select(\DB::raw("*,( 6371 * acos( cos( radians($request->latitude) ) * cos( radians( latitude ) ) * cos( radians(longitude) - radians($request->longitude)) + sin(radians($request->latitude)) * sin( radians(latitude)))) AS distance"))->having("distance", "<", $ddistance)->orderBy('id','desc')->take(10)->get()->makeHidden('user_name');
        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'items' => $items]);
    }

    public function search(Request $request){
        $search = new UserSearch();
        if (auth('api')->check()){
            $search->user_id = auth('api')->id();
        }
        $search->fcm_token = $request->header('fcmToken');
        $search->name = $request->name;
        $search->save();


        $items = Subadmin::query()->filter()->where('status','active')->paginate(30)->items();

        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'items' => $items , 'is_more'=>count($items)==30]);
    }


    public function getMySearches(Request $request){
        $items = UserSearch::where(function ($q) use ($request) {
            $q->where('fcm_token', $request->header('fcmToken'))->orWhere('user_id', auth('api')->id());
        })->orderByDesc('id')->get();
        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'items' => $items , 'is_more'=>count($items)==30]);
    }

    public function deleteMySearches(Request $request){
        UserSearch::where(function ($q) use ($request) {
            $q->where('fcm_token', $request->header('fcmToken'))->orWhere('user_id', auth('api')->id());
        })->delete();
        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message]);
    }


    public function restaurantDetails($id)
    {
        $item = Subadmin::with(['images','categories'])->with('business_hours')->where('id', $id)->first()->makeHidden('cuisines');
        $cuisinesIds = @$item->cuisines->pluck('cuisine_id')->toArray();
        $cuisines = Cuisine::whereIn('id',$cuisinesIds)->get();
        $item['restaurant_cuisines'] = $cuisines;
//        $timesIds = $item->times->pluck('id')->toArray();
//        $times = Day::with('times')->get();
//        $item['times'] = $times;

        if ($item) {
            $message = __('api.ok');
            return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'item' => $item]);
        }else{
            $message = __('api.whoops');
            return response()->json(['status' => false, 'code' => 200, 'message' => $message]);
        }
    }

    public function restaurantMeals(Request $request , $id)
    {
        $items = Meal::where('user_id',$id)->orderBy('sort_order')->filter()->paginate($this->settings->paginateTotal)->items();
        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'items' => $items , 'is_more'=>count($items) == $this->settings->paginateTotal]);
    }


    public function mealDetails(Request $request , $id)
    {
        $item = Meal::with('options.option_values.option_value')->with(['extras','images'])->where('id',$id)->first();
        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'item' => $item]);
    }



    public function contactUs(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|min:8|max:14',
            'message' => 'required|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'code' => 200,
                'message' => implode("\n",$validator-> messages()-> all()) ]);
        }

        $item = new Contact();
        $item->name = $request->get('name');
        $item->email = $request->get('email');
        $item->mobile = $request->get('mobile');
        $item->message = $request->get('message');

        $item->save();

        $message = __('api.done_successfully');
        return response()->json(['status' => true,  'message' => $message,   ]);

    }


    public function JoinUs(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|min:8|max:14',
            'description' => 'required|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'code' => 200,
                'message' => implode("\n",$validator-> messages()-> all()) ]);
        }

        $item = new JoinRequest();
        $item->name = $request->get('name');
        $item->email = $request->get('email');
        $item->mobile = $request->get('mobile');
        $item->description = $request->get('description');

        $item->save();

        $message = __('api.done_successfully');
        return response()->json(['status' => true,  'message' => $message,   ]);

    }

    public function getSetting()
    {
        $settings = Setting::query()->first();
        $settings['banner'] = Banner::where('status','active')->inRandomOrder()->first();
        $settings['pages'] = Page::get();
        $settings['cuisines'] = Cuisine::get();
        $message = __('api.ok');
        return response()->json(['status' => true, 'code' => 200, 'message' => $message, 'settings' => $settings]);
    }



}
