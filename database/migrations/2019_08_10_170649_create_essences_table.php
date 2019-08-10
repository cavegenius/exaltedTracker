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
            $table->timestamps();
            $table->integer('characterId')->unsigned();
            $table->foreign('characterId')->references('id')->on('characters');
            $table->tinyInteger('level');
            $table->tinyInteger('personalAvailable');
            $table->tinyInteger('personalTotal');
            $table->tinyInteger('peripheralAvailable');
            $table->tinyInteger('peripheralTotal');
            $table->tinyInteger('committed');
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
