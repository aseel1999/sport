<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Models\Video;
use App\Models\Album;
use App\Models\Neww;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Infographic;

use App\Models\Contact;
use App\Models\Category;
class HomeController extends Controller
{

    public function index()
    {
        $news_count =Neww::count();
        $admins=Admin::count();
       $albums=Album::count();
        $videoes = Video::count();
        $contacts = Contact::count();
        $categories =Category::count();
        return view('admin.home.dashboard')->with(compact('news_count',
            'admins','albums'
        ,'videoes','contacts','categories'
        ));
    } 


    public function changeStatus($model, Request $request)
    {
        $role = "";
        if ($model == "admins") $role = 'App\Models\Admin';
        if ($model == "categories") $role = 'App\Models\Category';
        if ($model == "albums") $role = 'App\Models\Album';
        if ($model == "news") $role = 'App\Models\Neww';
        if ($model == "videoes") $role = 'App\Models\Video';
        if ($model == "contacts") $role = 'App\Models\Contact';
        if ($model == "users") $role = 'App\Models\User';
        if ($model == "roles") $role = 'App\Models\Role';

        if ($role != "") {
            if ($request->action == 'delete') {
                $role::query()->whereIn('id', $request->IDsArray)->delete();
            } else {
                if ($request->action) {
                    $role::query()->whereIn('id', $request->IDsArray)->update(['status' => $request->action]);
                }
            }

            return $request->action;
        }
        return false;


    }


}
