<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('settings')) {
            Schema::create('settings', function (Blueprint $table) {
                $table->id();
                $table->integer('paginateTotal');
                $table->string('login_image');
                $table->string('google_play_url')->nullable();
                $table->string('app_store_url')->nullable();
                $table->string('app_logo');
                $table->string('info_email');
                $table->string('mobile');
                $table->string('facebook');
                $table->string('twitter');
                $table->string('instagram');
                $table->text('about');
                $table->text('whatsapp');
                $table->enum('is_maintenance_mode',[0,1])->comment('0->off 1->on');
                $table->enum('is_allow_register',[0,1])->comment('0->off 1->on');
                $table->enum('is_allow_login',[0,1])->comment('0->off 1->on');
                $table->string('urls');
                $table->timestamps();
                $table->softDeletes();
            });


        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
