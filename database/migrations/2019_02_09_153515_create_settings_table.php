<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone')->default('+7 (812) 555-05-55');
            $table->string('logo')->default('logo.png');
            $table->string('social_vk_link')->default('');
            $table->string('social_ok_link')->default('');
            $table->string('address')->default('г. Санкт-Петербург, ул. Б. Конюшенная, д. 19/8');
        });
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
