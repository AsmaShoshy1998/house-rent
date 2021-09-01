<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('full_name'); 
            $table->string('role')->default('user'); 
            $table->string('email')->unique(); 
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); 
            $table->integer('NID_Number')->unique();
            $table->string('mobile_number'); 
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('occupation');
            $table->rememberToken(); 
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
        Schema::dropIfExists('users');
    }
}
