<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('permissions')) {
            Schema::create('permissions', function (Blueprint $table) {
                $table->id();
                $table->string('slug');
                $table->timestamps();
                $table->softDeletes();
            });
            DB::table('permissions')->insert([

                ['slug'=>'admins-show'],
                ['slug'=>'admins-create'],
                ['slug'=>'admins-edit'],
                ['slug'=>'admins-delete'],

                ['slug'=>'videoes-show'],
                ['slug'=>'videoes-create'],
                ['slug'=>'videoes-edit'],
                ['slug'=>'videoes-delete'],

                
                ['slug'=>'categories-show'],
                ['slug'=>'categories-create'],
                ['slug'=>'categories-edit'],
                ['slug'=>'categories-delete'],

                ['slug'=>'news-show'],
                ['slug'=>'news-create'],
                ['slug'=>'news-edit'],
                ['slug'=>'news-delete'],

                ['slug'=>'albums-show'],
                ['slug'=>'albums-create'],
                ['slug'=>'albums-edit'],
                ['slug'=>'albums-delete'],

                ['slug'=>'roles-show'],
                ['slug'=>'roles-create'],
                ['slug'=>'roles-edit'],
                ['slug'=>'roles-delete'],

                ['slug'=>'contacts-show'],
                ['slug'=>'contacts-edit'],
                ['slug'=>'contacts-delete'],


                ['slug'=>'pages-show'],
                ['slug'=>'pages-edit'],

                
                ['slug'=>'settings-show'],
                ['slug'=>'settings-edit'],



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
        Schema::dropIfExists('permissions');

    }
}
