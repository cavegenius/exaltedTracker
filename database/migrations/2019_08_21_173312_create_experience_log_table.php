<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('characterId')->unsigned();
            $table->foreign('characterId')->references('id')->on('characters');
            $table->integer('experience')->default(0);
            $table->integer('dragonExperience')->default(0);
            $table->date('sessionDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience_logs');
    }
}
