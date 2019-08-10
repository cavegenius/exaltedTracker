<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('characterId')->unsigned();
            $table->foreign('characterId')->references('id')->on('characters');
            $table->tinyInteger('naturalSoak');
            $table->tinyInteger('finalSoak');
            $table->string('parry', 45);
            $table->string('resolve', 45);
            $table->string('evasion', 45);
            $table->string('rush', 45);
            $table->string('guile', 45);
            $table->string('disengage', 45);
            $table->string('joinBattle', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('defenses');
    }
}
