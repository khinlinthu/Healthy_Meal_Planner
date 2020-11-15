<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodpackages', function (Blueprint $table) {
            $table->id();
            $table->string('codeno');
            $table->string('foodpackages');
            $table->string('totalCalories');
            $table->integer('price');
            $table->integer('discount')->default(0);
            $table->string('weight_target');
            $table->string('type');
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
        Schema::dropIfExists('foodpackages');
    }
}
