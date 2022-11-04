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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name','500');
            $table->string('username')->nullable();
            $table->string('phone')->nullable();
            $table->string('bio')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('dob')->nullable();
            $table->enum('user_type',['supplier','customer','dashboard'])->default('dashboard');
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('state_province')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('governorate_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsApp')->nullable();
            $table->string('telegram')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
