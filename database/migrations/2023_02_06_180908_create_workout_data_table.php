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
        Schema::create('workout_data', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->double('height');
            $table->double('weight');
            $table->boolean('gender');
            $table->string('activity_rate');
            $table->string('exercise_level');
            $table->string('workout_place');
            $table->string('workout_days');
            $table->string('workout_tools')->nullable(true);
            $table->integer('number_of_days');
            $table->double('body_fat');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workout_data');
    }
};
