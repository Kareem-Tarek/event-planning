<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title','500');
            $table->text('description');
            $table->time('time')->nullable();
            $table->date('date');
            $table->string('budget');
            $table->string('location')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('governorate_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('category_id');
            $table->string('user_id');
            $table->integer('create_user_id');
            $table->integer('update_user_id')->nullable();
            $table->enum('status',['Expired','Available','Stopped']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
