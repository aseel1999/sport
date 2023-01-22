<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePermissionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('permission_translations')) {
            Schema::create('permission_translations', function (Blueprint $table) {
                $table->id();
                $table->integer('permission_id');
                $table->string('locale');
                $table->string('name');
                $table->timestamps();
                $table->softDeletes();
            });
            DB::table('permission_translations')->insert([

                ['permission_id'=>'1','locale'=>'en','name'=>'admins-show'],
                ['permission_id'=>'1','locale'=>'ar','name'=>'عرض المدراء'],
                ['permission_id'=>'2','locale'=>'en','name'=>'admins-create'],
                ['permission_id'=>'2','locale'=>'ar','name'=>'إضافة المدراء'],
                ['permission_id'=>'3','locale'=>'en','name'=>'admins-edit'],
                ['permission_id'=>'3','locale'=>'ar','name'=>'تعديل المدراء'],
                ['permission_id'=>'4','locale'=>'en','name'=>'admins-delete'],
                ['permission_id'=>'4','locale'=>'ar','name'=>'حذف المدراء'],

                ['permission_id'=>'5','locale'=>'en','name'=>'videoes-show'],
                ['permission_id'=>'5','locale'=>'ar','name'=>'عرض الفيديوهات'],
                ['permission_id'=>'5','locale'=>'en','name'=>'videoes-create'],
                ['permission_id'=>'5','locale'=>'ar','name'=>'اضافة الفيديوهات'],
                ['permission_id'=>'6','locale'=>'en','name'=>'vdeoes-edit'],
                ['permission_id'=>'6','locale'=>'ar','name'=>'تعديل الفيديوهات'],
                ['permission_id'=>'10','locale'=>'en','name'=>'videoes-delete'],
                ['permission_id'=>'10','locale'=>'ar','name'=>'حذف الفيديوهات'],

               
               
                ['permission_id'=>'7','locale'=>'en','name'=>'categories-show'],
                ['permission_id'=>'7','locale'=>'ar','name'=>'عرض التصنيفات'],
                ['permission_id'=>'8','locale'=>'en','name'=>'categories-create'],
                ['permission_id'=>'8','locale'=>'ar','name'=>'إضافة التصنيفات'],
                ['permission_id'=>'9','locale'=>'en','name'=>'categories-edit'],
                ['permission_id'=>'9','locale'=>'ar','name'=>'تعديل التصنيفات'],
                ['permission_id'=>'10','locale'=>'en','name'=>'categories-delete'],
                ['permission_id'=>'10','locale'=>'ar','name'=>'حذف التصنيفات'],

                
                ['permission_id'=>'11','locale'=>'en','name'=>'news-show'],
                ['permission_id'=>'7','locale'=>'ar','name'=>'عرض الأخبار'],
                ['permission_id'=>'8','locale'=>'en','name'=>'news-create'],
                ['permission_id'=>'8','locale'=>'ar','name'=>'اضافة ألاخبار'],
                ['permission_id'=>'9','locale'=>'en','name'=>'news-edit'],
                ['permission_id'=>'9','locale'=>'ar','name'=>'تعديل  الأخبار'],
                ['permission_id'=>'10','locale'=>'en','name'=>'news-delete'],
                ['permission_id'=>'10','locale'=>'ar','name'=>'حذف الأخبار'], 

                ['permission_id'=>'10','locale'=>'en','name'=>'albums-show'],
                ['permission_id'=>'10','locale'=>'ar','name'=>'عرض الألبومات '],
                ['permission_id'=>'10','locale'=>'en','name'=>'albums-create'],
                ['permission_id'=>'10','locale'=>'ar','name'=>'اضافة الألبومات '],
                ['permission_id'=>'10','locale'=>'en','name'=>'albums-edit'],
                ['permission_id'=>'10','locale'=>'ar','name'=>'تعديل الألبومات'],
                ['permission_id'=>'10','locale'=>'en','name'=>'albums-delete'],
                ['permission_id'=>'10','locale'=>'ar','name'=>'حذف الأبومات'],


                ['permission_id'=>'16','locale'=>'en','name'=>'roles-show'],
                ['permission_id'=>'16','locale'=>'ar','name'=>'عرض المسميات الوظيفية'],
                ['permission_id'=>'17','locale'=>'en','name'=>'roles-create'],
                ['permission_id'=>'17','locale'=>'ar','name'=>'إضافة المسميات الوظيفية'],
                ['permission_id'=>'18','locale'=>'en','name'=>'roles-edit'],
                ['permission_id'=>'18','locale'=>'ar','name'=>'تعديل المسميات الوظيفية'],
                ['permission_id'=>'19','locale'=>'en','name'=>'roles-delete'],
                ['permission_id'=>'19','locale'=>'ar','name'=>'حذف المسميات الوظيفية'],

                
               
                ['permission_id'=>'11','locale'=>'en','name'=>'contacts-show'],
                ['permission_id'=>'11','locale'=>'ar','name'=>'عرض الرسائل'],
                ['permission_id'=>'12','locale'=>'en','name'=>'contacts-edit'],
                ['permission_id'=>'12','locale'=>'ar','name'=>'تعديل الرسائل'],
                ['permission_id'=>'13','locale'=>'en','name'=>'contacts-delete'],
                ['permission_id'=>'13','locale'=>'ar','name'=>'حذف الرسائل'],

                

                ['permission_id'=>'14','locale'=>'en','name'=>'pages-show'],
                ['permission_id'=>'14','locale'=>'ar','name'=>'عرض الصفحات'],
                ['permission_id'=>'15','locale'=>'en','name'=>'pages-edit'],
                ['permission_id'=>'15','locale'=>'ar','name'=>'تعديل الصفحات'],


               
               
               

                ['permission_id'=>'20','locale'=>'en','name'=>'settings-show'],
                ['permission_id'=>'20','locale'=>'ar','name'=>'عرض الإعدادات'],
                ['permission_id'=>'21','locale'=>'en','name'=>'settings-edit'],
                ['permission_id'=>'21','locale'=>'ar','name'=>'تعديل الإعدادات'],



            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_translations');
    }
}
