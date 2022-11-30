<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('up_ph')->nullable();
            $table->string('down_ph')->nullable();
            $table->string('up_orp')->nullable();
            $table->string('down_orp')->nullable();
            $table->string('up_tempwater')->nullable();
            $table->string('down_tempwater')->nullable();
            $table->string('up_tempair')->nullable();
            $table->string('down_tempair')->nullable();
//            $table->string('lvl_flotteur1')->nullable();
//            $table->string('lvl_flotteur2')->nullable();
            $table->string('up_ppm')->nullable();
            $table->string('dow_ppm')->nullable();
            $table->integer('devise_id')->unsigned();
            $table->foreign('devise_id')->references('id')->on('devises')->onDelete('cascade');
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
        Schema::dropIfExists('settings');
    }
}
