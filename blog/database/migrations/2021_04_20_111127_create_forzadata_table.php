<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForzadataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forzadatas', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('manufacturer');
            $table->string('model');
            $table->string('value');
            $table->string('division');
            $table->string('pi');
            $table->string('engine');
            $table->string('engine_layout');
            $table->string('drivetrain');
            $table->string('power_kw');
            $table->string('touge_nm');
            $table->string('weight_kg');
            $table->string('top_speed_kph');
            $table->string('lap_time');
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
        Schema::dropIfExists('forzadatas');
    }
}
