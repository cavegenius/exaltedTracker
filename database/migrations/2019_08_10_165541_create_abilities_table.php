<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('characterId')->unsigned();
            $table->foreign('characterId')->references('id')->on('characters');
            $table->tinyInteger('archery');
            $table->tinyInteger('athletics');
            $table->tinyInteger('awareness');
            $table->tinyInteger('brawl');
            $table->tinyInteger('bureaucracy');
            $table->tinyInteger('craft');
            $table->tinyInteger('dodge');
            $table->tinyInteger('integrity');
            $table->tinyInteger('investigation');
            $table->tinyInteger('larceny');
            $table->tinyInteger('linguistics');
            $table->tinyInteger('lore');
            $table->tinyInteger('martialArts');
            $table->tinyInteger('medicine');
            $table->tinyInteger('melee');
            $table->tinyInteger('occult');
            $table->tinyInteger('performance');
            $table->tinyInteger('presence');
            $table->tinyInteger('resistance');
            $table->tinyInteger('ride');
            $table->tinyInteger('sail');
            $table->tinyInteger('socialize');
            $table->tinyInteger('stealth');
            $table->tinyInteger('survival');
            $table->tinyInteger('thrown');
            $table->tinyInteger('war');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abilities');
    }
}
