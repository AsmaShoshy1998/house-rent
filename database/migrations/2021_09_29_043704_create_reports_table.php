<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_number');
            $table->string('user_address');
            $table->date('beginning_time');
            $table->text('description');
            $table->integer('house_id');
            $table->string('house_address');
            $table->string('house_type');
            $table->integer('house_rent');
            $table->string('status')->default('');
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
        Schema::dropIfExists('reports');
    }
}
