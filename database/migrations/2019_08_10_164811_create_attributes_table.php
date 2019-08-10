<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('characterId')->unsigned();
            $table->foreign('characterId')->references('id')->on('characters');
            $table->tinyInteger('strength');
            $table->tinyInteger('dexterity');
            $table->tinyInteger('stamina');
            $table->tinyInteger('charisma');
            $table->tinyInteger('manipulation');
            $table->tinyInteger('appearance');
            $table->tinyInteger('perception');
            $table->tinyInteger('intelligence');
            $table->tinyInteger('wits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
