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
            $table->bigInteger('characterId')->unsigned();
            $table->foreign('characterId')->references('id')->on('characters');
            $table->tinyInteger('archery')->default(0);
            $table->tinyInteger('athletics')->default(0);
            $table->tinyInteger('awareness')->default(0);
            $table->tinyInteger('brawl')->default(0);
            $table->tinyInteger('bureaucracy')->default(0);
            $table->tinyInteger('craft')->default(0);
            $table->tinyInteger('dodge')->default(0);
            $table->tinyInteger('integrity')->default(0);
            $table->tinyInteger('investigation')->default(0);
            $table->tinyInteger('larceny')->default(0);
            $table->tinyInteger('linguistics')->default(0);
            $table->tinyInteger('lore')->default(0);
            $table->tinyInteger('martialArts')->default(0);
            $table->tinyInteger('medicine')->default(0);
            $table->tinyInteger('melee')->default(0);
            $table->tinyInteger('occult')->default(0);
            $table->tinyInteger('performance')->default(0);
            $table->tinyInteger('presence')->default(0);
            $table->tinyInteger('resistance')->default(0);
            $table->tinyInteger('ride')->default(0);
            $table->tinyInteger('sail')->default(0);
            $table->tinyInteger('socialize')->default(0);
            $table->tinyInteger('stealth')->default(0);
            $table->tinyInteger('survival')->default(0);
            $table->tinyInteger('thrown')->default(0);
            $table->tinyInteger('war')->default(0);
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
