<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacementfees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('placementfees', function (Blueprint $table) {
            $table->id('placement_id');
            $table->string('placement_month'); 
            $table->string('placement_year'); 
            $table->integer('total_rent_collection');
            $table->string('placement_fee_collection'); 
            
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
        Schema::dropIfExists('placementfees');
    }
}
