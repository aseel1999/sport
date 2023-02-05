<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Models\Cart;
use App\Models\Setting;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath'
    ]
], function () {

    Route::get('forgot/password', 'Auth\ForgotPasswordController@forgotPasswordForm')->name('forgotPasswordForm');
    Route::post('sendResetLinkEmail', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('sendResetLinkEmail');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.new');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');




    


    Route::group(['middleware' => ['auth']], function () {

    });

    Route::get('/', 'WEB\Site\HomeController@index')->name('home');
    Route::get('/news/{id}/details', 'WEB\Admin\ArticleController@details')->name('details');
    Route::get('/contact-us','WEB\Site\HomeController@contact')->name('contact');
    Route::post('/contact-us-store','WEB\Site\HomeController@contactUs')->name('contactUs');
    Route::get('/privacy', 'WEB\Site\HomeController@privacy')->name('privacy');
    Route::get('/terms', 'WEB\Site\HomeController@terms')->name('terms');
    Route::get('/opinions', 'WEB\Site\HomeController@opinions')->name('opinions');
    Route::get('/opinion-details/{id}', 'WEB\Site\HomeController@opinionDetail')->name('opinionDetail');
    Route::get('/infographic', 'WEB\Site\HomeController@infographic')->name('infographic');
    Route::get('/about', 'WEB\Site\HomeController@about')->name('about');
    Route::get('/inner-page', 'WEB\Site\HomeController@locale')->name('inner_page');
    Route::get('/global-page', 'WEB\Site\HomeController@categoryArticle')->name('global_page');
    Route::get('/media', 'WEB\Site\HomeController@media')->name('media');
    Route::get('/sports/{id}','WEB\Site\HomeController@sports')->name('sports');
    Route::get('/search','WEB\Site\HomeController@search')->name('search');

    //ADMIN AUTH ///
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            return route('/login');
        });


        Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login.form');
        Route::post('/login', 'AdminAuth\LoginController@login')->name('admin.login');
        Route::get('/logout', 'AdminAuth\LoginController@logout')->name('admin.logout');
    });


   Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin', 'as' => 'admin.',], function () {
        Route::get('/', function () {
            return redirect('/admin/home');
        });
        Route::post('/changeStatus/{model}', 'WEB\Admin\HomeController@changeStatus');

        Route::get('home', 'WEB\Admin\HomeController@index')->name('admin.home');

        Route::get('/admins/{id}/edit', 'WEB\Admin\AdminController@edit')->name('admins.edit');
        Route::patch('/admins/{id}', 'WEB\Admin\AdminController@update')->name('users.update');
        Route::get('/admins/{id}/edit_password', 'WEB\Admin\AdminController@edit_password')->name('admins.edit_password');
        Route::post('/admins/{id}/edit_password', 'WEB\Admin\AdminController@update_password')->name('admins.edit_password');


        Route::get('/admins', 'WEB\Admin\AdminController@index')->name('admins.all');
        Route::post('/admins/changeStatus', 'WEB\Admin\AdminController@changeStatus')->name('admin_changeStatus');
        Route::delete('admins/{id}', 'WEB\Admin\AdminController@destroy')->name('admins.destroy');
        Route::post('/admins', 'WEB\Admin\AdminController@store')->name('admins.store');
        Route::get('/admins/create', 'WEB\Admin\AdminController@create')->name('admins.create');
        Route::get('/editMyProfile', 'WEB\Admin\AdminController@editMyProfile')->name('admins.editMyProfile');
        Route::post('/updateProfile', 'WEB\Admin\AdminController@updateProfile')->name('admins.updateProfile');
        Route::get('/changeMyPassword', 'WEB\Admin\AdminController@changeMyPassword')->name('admins.changeMyPassword');
        Route::post('/updateMyPassword', 'WEB\Admin\AdminController@updateMyPassword')->name('admins.updateMyPassword');

        
        Route::resource('/categories', 'WEB\Admin\CategoryController');
        Route::resource('/albums','WEB\Admin\AlbumController');
        Route::resource('/videoes','WEB\Admin\VideoController');
        Route::resource('/opinions','WEB\Admin\OpinionController');

        Route::resource('/news', 'WEB\Admin\ArticleController');
        Route::resource('/sports', 'WEB\Admin\SportController');
        Route::get('/news/{id}/details', 'WEB\Admin\ArticleController@details');

        Route::get('/contacts', 'WEB\Admin\ContactController@index');
        Route::get('/contacts/{id}/show', 'WEB\Admin\ContactController@show');
        Route::patch('/contacts/{id}', 'WEB\Admin\ContactController@update');
        Route::get('/export/excel/contacts', 'WEB\Admin\ContactController@exportExcel');
        Route::get('/pdfContacts', 'WEB\Admin\ContactController@pdfContacts');
        //Route::get('/news/{id}/details', 'WEB\Admin\ArticleController@details');
       
        

        Route::get('settings', 'WEB\Admin\SettingController@index')->name('settings.all');
        Route::post('settings', 'WEB\Admin\SettingController@update')->name('settings.update');

        Route::get('system_maintenance', 'WEB\Admin\SettingController@system_maintenance')->name('system.maintenance');
        Route::post('system_maintenance', 'WEB\Admin\SettingController@update_system_maintenance')->name('update.system.maintenance');


        Route::resource('/pages', 'WEB\Admin\PagesController');
        Route::resource('/roles', 'WEB\Admin\RolesController');
        Route::get('logs', 'WEB\Admin\LogController@index');


    });




   
   



});

