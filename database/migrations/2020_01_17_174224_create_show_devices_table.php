<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_devices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value');
            $table->string('MAC');
            $table->string('Time_S');
            $table->string('Ph');
            $table->string('ORP');
            $table->string('TempWater');
            $table->string('TempAir');
            $table->string('Flotteur1');
            $table->string('Flotteur2');
            $table->string('ppm');

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
        Schema::dropIfExists('show_devices');
    }
}
