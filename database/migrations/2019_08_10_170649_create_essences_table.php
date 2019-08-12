<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEssencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('essences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('characterId')->unsigned();
            $table->foreign('characterId')->references('id')->on('characters');
            $table->tinyInteger('level')->default(0);
            $table->tinyInteger('personalAvailable')->default(0);
            $table->tinyInteger('personalTotal')->default(0);
            $table->tinyInteger('peripheralAvailable')->default(0);
            $table->tinyInteger('peripheralTotal')->default(0);
            $table->tinyInteger('committed')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('essences');
    }
}
