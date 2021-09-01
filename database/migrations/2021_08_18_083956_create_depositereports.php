<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositereports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depositereports', function (Blueprint $table) {
            $table->id('deposite_id');
            $table->string('full_name'); 
            $table->integer('house_id'); 
            $table->date('paid_on'); 
            $table->string('apartment_owner'); 
            $table->integer('amount');
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
        Schema::dropIfExists('depositereports');
    }
}
