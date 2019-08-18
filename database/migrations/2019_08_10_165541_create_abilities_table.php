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
            $table->tinyInteger('archeryFavored')->default(false);
            $table->tinyInteger('athletics')->default(0);
            $table->tinyInteger('athleticsFavored')->default(false);
            $table->tinyInteger('awareness')->default(0);
            $table->tinyInteger('awarenessFavored')->default(false);
            $table->tinyInteger('brawl')->default(0);
            $table->tinyInteger('brawlFavored')->default(false);
            $table->tinyInteger('bureaucracy')->default(0);
            $table->tinyInteger('bureaucracyFavored')->default(false);
            $table->tinyInteger('craft')->default(0);
            $table->tinyInteger('craftFavored')->default(false);
            $table->tinyInteger('dodge')->default(0);
            $table->tinyInteger('dodgeFavored')->default(false);
            $table->tinyInteger('integrity')->default(0);
            $table->tinyInteger('integrityFavored')->default(false);
            $table->tinyInteger('investigation')->default(0);
            $table->tinyInteger('investigationFavored')->default(false);
            $table->tinyInteger('larceny')->default(0);
            $table->tinyInteger('larcenyFavored')->default(false);
            $table->tinyInteger('linguistics')->default(0);
            $table->tinyInteger('linguisticsFavored')->default(false);
            $table->tinyInteger('lore')->default(0);
            $table->tinyInteger('loreFavored')->default(false);
            $table->tinyInteger('martialArts')->default(0);
            $table->tinyInteger('martialArtsFavored')->default(false);
            $table->tinyInteger('medicine')->default(0);
            $table->tinyInteger('medicineFavored')->default(false);
            $table->tinyInteger('melee')->default(0);
            $table->tinyInteger('meleeFavored')->default(false);
            $table->tinyInteger('occult')->default(0);
            $table->tinyInteger('occultFavored')->default(false);
            $table->tinyInteger('performance')->default(0);
            $table->tinyInteger('performanceFavored')->default(false);
            $table->tinyInteger('presence')->default(0);
            $table->tinyInteger('presenceFavored')->default(false);
            $table->tinyInteger('resistance')->default(0);
            $table->tinyInteger('resistanceFavored')->default(false);
            $table->tinyInteger('ride')->default(0);
            $table->tinyInteger('rideFavored')->default(false);
            $table->tinyInteger('sail')->default(0);
            $table->tinyInteger('sailFavored')->default(false);
            $table->tinyInteger('socialize')->default(0);
            $table->tinyInteger('socializeFavored')->default(false);
            $table->tinyInteger('stealth')->default(0);
            $table->tinyInteger('stealthFavored')->default(false);
            $table->tinyInteger('survival')->default(0);
            $table->tinyInteger('survivalFavored')->default(false);
            $table->tinyInteger('thrown')->default(0);
            $table->tinyInteger('thrownFavored')->default(false);
            $table->tinyInteger('war')->default(0);
            $table->tinyInteger('warFavored')->default(false);
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
