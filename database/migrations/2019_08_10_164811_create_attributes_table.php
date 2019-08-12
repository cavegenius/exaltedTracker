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
            $table->bigInteger('characterId')->unsigned();
            $table->foreign('characterId')->references('id')->on('characters');
            $table->tinyInteger('strength')->default(0);
            $table->tinyInteger('dexterity')->default(0);
            $table->tinyInteger('stamina')->default(0);
            $table->tinyInteger('charisma')->default(0);
            $table->tinyInteger('manipulation')->default(0);
            $table->tinyInteger('appearance')->default(0);
            $table->tinyInteger('perception')->default(0);
            $table->tinyInteger('intelligence')->default(0);
            $table->tinyInteger('wits')->default(0);
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
