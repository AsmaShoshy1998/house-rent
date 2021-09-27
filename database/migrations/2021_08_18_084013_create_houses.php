<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('house_type');
            $table->string('address');
            // $table->interger('user_id');
            $table->string('house_owner');
            $table->integer('number_of_room');
            $table->integer('amenities_id');
            $table->integer('number_of_toilet');
            $table->integer('number_of_belcony');
            $table->integer('rent');
            $table->text('images');
            $table->text('description',2000);
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
        Schema::dropIfExists('houses');
    }
}
