<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Exports\ProvidersExport;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Language;
use App\Models\Meal;
use App\Models\Order;
use App\Models\RestaurantBusinesHour;
use App\Models\Setting;
use App\Models\Subadmin;
use App\Models\User;
use App\Models\UserCuisines;
use App\Models\UserImage;
use App\Traits\imageTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class ProvidersController extends Controller
{
    use imageTrait;


    public function __construct()
    {
        $this->settings = Setting::query()->first();
        view()->share([
            'settings' => $this->settings,
        ]);

        $route = Route::currentRouteAction();
        $route_name = substr($route, strpos($route, "@") + 1);
        $this->middleware(function ($request, $next) use ($route_name) {
            if (can('providers')) {
                return $next($request);
            }
            if ($route_name == 'index') {
                if (can(['providers-show', 'providers-create', 'providers-edit', 'providers-delete'])) {
                    return $next($request);
                }
            } elseif ($route_name == 'create' || $route_name == 'store') {
                if (can('providers-create')) {
                    return $next($request);
                }
            } elseif ($route_name == 'edit' || $route_name == 'update') {
                if (can('providers-edit')) {
                    return $next($request);
                }
            } elseif ($route_name == 'destroy' || $route_name == 'delete') {
                if (can('providers-delete')) {
                    return $next($request);
                }
            } else {
                return $next($request);
            }
            return redirect()->back()->withErrors(__('cp.you_dont_have_permission'));
        });
    }

    public function index(Request $request)
    {
        $cuisines = Cuisine::get();
        $items = Subadmin::filter()->orderBy('id', 'desc')->paginate($this->settings->paginateTotal);
        return view('admin.providers.home', [
            'items' => $items,
            'cuisines' => $cuisines,
        ]);
    }


    public function create()
    {
        $cuisines = Cuisine::get();
        return view('admin.providers.create')->with(compact('cuisines'));
    }


    public function categories($id)
    {
        $item = Subadmin::where('id', $id)->first();
        $items = Category::where('user_id', $id)->get();

        return view('admin.providers.categories', [
            'item' => $item,
            'items' => $items,
        ]);
    }

    public function businessHours($id)
    {
        $item = Subadmin::where('id', $id)->first();
        $items = RestaurantBusinesHour::where('user_id', $id)->get();

        return view('admin.providers.busines_hours', [
            'item' => $item,
            'items' => $items,
        ]);
    }

    public function updateBusinessHours(Request $request, $id)
    {
        $item = Subadmin::where('id', $id)->first();
        if ($request->has('days') && $request->days != '') {
            $in = 0;
            foreach ($request->days as $day) {
                if (isset($day) && $request->from[$in] != null && $request->to[$in] != null) {
                    $from = Carbon::createFromFormat('H:i', $request->from[$in]);
                    $to = Carbon::createFromFormat('H:i', $request->to[$in]);
                    RestaurantBusinesHour::updateOrCreate(['day' => $day, 'user_id' => $id], ['from' => $from, 'to' => $to]);
                } elseif (isset($day)) {
                    RestaurantBusinesHour::where(['day' => $day, 'user_id' => $id])->delete();
                }
                $in++;
            }
            activity($item->name)->causedBy(auth('admin')->user())->log(' تعديل ساعات العمل لمزود الخدمة ');

        }
        return redirect()->back()->with('status', __('cp.update'));
    }

    public function store(Request $request)
    {

        $roles = [
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
            'mobile' => 'digits_between:8,13|unique:subadmins,mobile',
            'email' => 'required|email:filter|unique:subadmins',
            'supplier_code' => 'required',
            'branch_name' => 'required',
            'cuisines' => 'required',
//            'accept_pick_up' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'type' => 'required',
            'status' => 'required',
            'opening_status' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6',
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required';
            $roles['description_' . $locale] = 'required';
        }
        $this->validate($request, $roles);
        $user = new Subadmin();
        $user->mobile = $request->mobile;
        $user->supplier_code = $request->supplier_code;
        $user->branch_name = $request->branch_name;
        $user->latitude = $request->latitude;
        $user->longitude = $request->longitude;
        $user->status = $request->status;
        $user->opening_status = $request->opening_status;
        $user->type = $request->type;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if ($request->get('accept_pick_up') == 'on') {
            $user->accept_pick_up = '1';
        } else {
            $user->accept_pick_up = '0';
        }
        foreach ($locales as $locale) {
            $user->translateOrNew($locale)->name = $request->get('name_' . $locale);
            $user->translateOrNew($locale)->description = $request->get('description_' . $locale);
        }


        if ($request->hasFile('image') && $request->image != '') {
            $user->image = $this->storeImage($request->image, 'subadmins');
        }

        $user->save();

        if ($request->cuisines != null) {
            $count = 1;
            foreach ($request->cuisines as $cuisineID) {
                if ($count <= 3) {
                    $values[] = [
                        'user_id' => $user->id,
                        'cuisine_id' => $cuisineID,
                    ];
                }
                $count++;
            }
            UserCuisines::insert($values);
        }

        if ($request->has('filename') && !empty($request->filename)) {
            foreach ($request->filename as $one) {
                if (isset(explode('/', explode(';', explode(',', $one)[0])[0])[1])) {
                    $fileType = strtolower(explode('/', explode(';', explode(',', $one)[0])[0])[1]);
                    $name = "" . str_random(8) . "" . "" . time() . "" . rand(1000000, 9999999);
                    $attachType = 0;
                    if (in_array($fileType, ['jpg', 'jpeg', 'png', 'pmb'])) {
                        $newName = $name . ".jpg";
                        $attachType = 1;
                        Image::make($one)->resize(800, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save("uploads/images/subadmins/$newName");
                    }
                    $user_image = new UserImage();
                    $user_image->user_id = $user->id;
                    $user_image->image = $newName;
                    $user_image->save();
                }
            }
        }

        activity($user->name)->causedBy(auth('admin')->user())->log(' إضافة مزود الخدمة ');

        return redirect()->back()->with('status', __('cp.create'));

    }


    public function edit($id)
    {
        $cuisines = Cuisine::get();
        $item = Subadmin::findOrFail($id);
        return view('admin.providers.edit', [
            'item' => $item,
            'cuisines' => $cuisines,
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = Subadmin::where('id', $id)->first();

        $roles = [
            'image' => 'image|mimes:jpeg,jpg,png,gif',
            'mobile' => 'required|digits_between:8,12|unique:subadmins,mobile,' . $user->id,
            'email' => 'required|email|unique:subadmins,email,' . $user->id,
            'supplier_code' => 'required',
            'branch_name' => 'required',
            'cuisines' => 'required',
//            'accept_pick_up' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'type' => 'required',
            'status' => 'required',
            'opening_status' => 'required',
        ];
        $locales = Language::all()->pluck('lang');
        foreach ($locales as $locale) {
            $roles['name_' . $locale] = 'required';
            $roles['description_' . $locale] = 'required';
        }
        $this->validate($request, $roles);

        $user->mobile = $request->mobile;
        $user->supplier_code = $request->supplier_code;
        $user->branch_name = $request->branch_name;
        $user->latitude = $request->latitude;
        $user->longitude = $request->longitude;
        $user->status = $request->status;
        $user->opening_status = $request->opening_status;
        $user->type = $request->type;
        $user->email = $request->email;
        if ($request->get('accept_pick_up') == 'on') {
            $user->accept_pick_up = '1';
        } else {
            $user->accept_pick_up = '0';
        }
        foreach ($locales as $locale) {
            $user->translateOrNew($locale)->name = $request->get('name_' . $locale);
            $user->translateOrNew($locale)->description = $request->get('description_' . $locale);
        }

        if ($request->hasFile('image') && $request->image != '') {
            $user->image = $this->storeImage($request->image, 'subadmins', $user->getRawOriginal('image'));
        }

        $user->save();

        if ($request->cuisines != null) {
            $count = 1;
            foreach ($request->cuisines as $cuisineID) {
                if ($count <= 3) {
                    $cuisines[] = [
                    'user_id' => $user->id,
                    'cuisine_id' => $cuisineID,
                ];
                }
                $count++;
            }
            UserCuisines::where('user_id', $user->id)->delete();
            UserCuisines::insert($cuisines);

        }

        $imgsIds = $user->images->pluck('id')->toArray();
        $newImgsIds = ($request->has('oldImages')) ? $request->oldImages : [];
        $diff = array_diff($imgsIds, $newImgsIds);
        UserImage::whereIn('id', $diff)->delete();

        if ($request->has('filename') && !empty($request->filename)) {
            foreach ($request->filename as $one) {
                if (isset(explode('/', explode(';', explode(',', $one)[0])[0])[1])) {
                    $fileType = strtolower(explode('/', explode(';', explode(',', $one)[0])[0])[1]);
                    $name = "" . str_random(8) . "" . "" . time() . "" . rand(1000000, 9999999);
                    $attachType = 0;
                    if (in_array($fileType, ['jpg', 'jpeg', 'png', 'pmb'])) {
                        $newName = $name . ".jpg";
                        $attachType = 1;
                        Image::make($one)->resize(800, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save("uploads/images/subadmins/$newName");
                    }
                    $user_image = new UserImage();
                    $user_image->user_id = $user->id;
                    $user_image->image = $newName;
                    $user_image->save();
                }
            }
        }

        activity($user->name)->causedBy(auth('admin')->user())->log(' تعديل مزود الخدمة ');

        return redirect()->back()->with('status', __('cp.update'));
    }

    public function meals($id)
    {
        $items = Meal::where('user_id', $id)->get();
        $item = Subadmin::findOrFail($id);

        return view('admin.providers.meals')->with(compact('items', 'item'));
    }

    public function edit_password($id)
    {
        $item = Subadmin::findOrFail($id);
        return view('admin.providers.edit_password', ['item' => $item]);
    }


    public function update_password(Request $request, $id)
    {
        $users_rules = array(
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6',
        );
        $users_validation = Validator::make($request->all(), $users_rules);

        if ($users_validation->fails()) {
            return redirect()->back()->withErrors($users_validation)->withInput();
        }
        $user = Subadmin::findOrFail($id);
        $user->password = bcrypt($request->password);
        $user->save();
        activity($user->name)->causedBy(auth('admin')->user())->log(' تعديل كلمة المرور لمزود الخدمة ');
        return redirect()->back()->with('status', __('cp.update'));
    }


    public function destroy($id)
    {
        $item = Subadmin::query()->findOrFail($id);
        if ($item) {
            Subadmin::query()->where('id', $id)->delete();
            return "success";
        }
        return "fail";
    }


    public function exportProviders(Request $request)
    {
        activity()->causedBy(auth('admin')->user())->log(' تصدير ملف إكسل لبيانات مزودي الخدمات ');
        return Excel::download(new ProvidersExport($request), 'providers.xlsx');
    }

    public function pdfProviders(Request $request)
    {
        activity()->causedBy(auth('admin')->user())->log(' تصدير ملف PDF لبيانات مزودي الخدمات ');
        $items = Subadmin::orderByDesc('id')->get();
        $pdf = PDF::loadView('admin.providers.export_pdf', ['items' => $items]);
        return $pdf->download('providers.pdf');
    }


    public function getCategories(Request $request)
    {
        $id = $request->id;
        $items = Category::where('user_id', $id)->get();
        return response()->json([
            'items' => $items
        ]);
    }

    public function orders($id){
        $item = Subadmin::query()->where('id',$id)->first();
        $items = Order::where('provider_id',$id)->orderByDesc('id')->paginate(30);
        return view('admin.providers.orders')->with(compact('items','item'));
    }


    public function editOrder($id,$order_id){
        $item = Subadmin::query()->where('id',$id)->first();
        $order = Order::where('id',$order_id)->first();
        return view('admin.providers.edit_order')->with(compact('order','item'));
    }




}
