<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('gametag1');
            $table->string('gametag2');
            $table->string('gametag3');
            $table->string('gametag4');
            $table->string('gametag5');
            $table->string('gametag6');
            $table->string('gametag7');
            $table->string('gametag8');
            $table->string('gametag9');
            $table->string('gametag10');
            $table->string('profile_pic');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
