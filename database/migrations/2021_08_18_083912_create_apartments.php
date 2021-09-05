<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id('apartment_id');
            $table->string('apartment_name');
            $table->string('apartment_type');
            $table->string('town_location');
            $table->string('location');
            $table->string('apartment_description');
            $table->string('apartment_owner');
            $table->text('images');
            $table->string('status', 10)->default('active');  
            $table->string('managementfee_percentage');

            
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
        Schema::dropIfExists('apartments');
    }
}
