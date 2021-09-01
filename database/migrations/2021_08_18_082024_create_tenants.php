<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id('tenant_id');
            $table->string('full_name');
            $table->integer('NID_Number')->unique();
            $table->string('email_address')->unique();
            $table->integer('Phone_number');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('occupation');
            $table->string('password');
            $table->date('placement_date'); 
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
        Schema::dropIfExists('tenants');
    }
}
