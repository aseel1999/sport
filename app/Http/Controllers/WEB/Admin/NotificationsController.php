<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use Mockery\Exception;
use Illuminate\Support\Facades\Validator;
use App\Models\Setting;
use App\Models\Group;
use App\Models\Token;


class NotificationsController extends Controller
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

            if($route_name== 'index' ){
                if(can(['notifications-show' , 'notifications-create'])){
                    return $next($request);
                }
            }elseif($route_name== 'create' || $route_name== 'store'){
                if(can('notifications-create')){
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
        $items = Notification::where(['type'=>1])->orderBy('id', 'Desc')->get();
        return view('admin.notifications.home', [
            'items' => $items,
        ]);
    }

    public function create()
    {
        return view('admin.notifications.create');
    }

    public function store(Request $request)
    {
        // return $request->type;
        $roles =[

        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
            $roles['message_' . $locale] = 'required';
        }
        $this->validate($request, $roles);


            $usersIDs = User::query()->where('type', $request->type)->pluck('id')->toArray();

            $notify = new Notification();
            foreach ($locales as $locale)
            {
                $notify->translateOrNew($locale)->title = $request->get('title_' . $locale);
                $notify->translateOrNew($locale)->message = $request->get('message_' . $locale);
            }

            $notify->user_id =  '-1';
            $notify->target_id =  0;
            $notify->type =  1;
            $notify->save();
            $tokens_en = Token::where('lang','en')->whereIn('user_id', $usersIDs)->pluck('fcm_token')->toArray();
            $tokens_ar = Token::where('lang','ar')->whereIn('user_id', $usersIDs)->pluck('fcm_token')->toArray();
            sendNotificationToUsers($tokens_en,'1',0,$request->get('title_en'),$request->get('message_en'));
            sendNotificationToUsers($tokens_ar,'1',0,$request->get('title_ar'),$request->get('message_ar'));




        return redirect()->back()->with('status', __('cp.create'));
    }

    public function destroy($id)
    {
        $notifications = Notification::query()->findOrFail($id);
        if ($notifications->delete()) {
            return 'success';
        }
        return 'fail';
    }

    function fcmPushToAll($title ,$message)

    {
//return $type[0];

        try {
            $headers = [
                'Authorization: key='.env("FireBaseKey"),
                'Content-Type: application/json'
            ];
            $notification= [
                "to"=> '/topics/yammk',

                "notification"=>[
                    'type' => "notify",
                    'title' => $title,
                    'target_id' => '55', // order_id or user_id
                    'msgType' => '55',//1=>order , 2=>msg
                    'body' => $message,
                    'icon' => 'myicon',//Default Icon
                    'sound' => 'mySound',//Default sound
                    'badge' => 1,
                    "click_action" => 'FLUTTER_NOTIFICATION_CLICK',


                ]
            ];
            //return $notification;
            // return json_encode($data);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($notification));



            $result = curl_exec($ch);
            curl_close($ch);
            //return json_decode($result, true);
            //  return back()->with('success','Edit SuccessFully');
        } catch (\Exception $ex) {
            //   return $ex->getMessage();
        }
    }



}
