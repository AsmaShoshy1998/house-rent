<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlords', function (Blueprint $table) {
            $table->id('landlord_id');
            $table->string('full_name');
            $table->integer('NID_Number')->unique();
            $table->string('email_address');
            $table->integer('Phone_number');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('login_password');
            $table->string('status', 10)->default('active');
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
        Schema::dropIfExists('landlords');
    }
}
