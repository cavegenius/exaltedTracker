<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charms', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->bigInteger('characterId')->unsigned();
            //$table->foreign('characterId')->references('id')->on('characters');
            $table->string('name', 150);
            $table->string('mins', 150);
            $table->string('type', 50);
            $table->string('duration', 50);
            $table->string('cost', 50);
            $table->string('element', 50);
            $table->string('book', 50)->default('DB???');
            $table->string('effect', 100);
            $table->string('prerequisite', 250);
            $table->longText('description', 2000 );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charms');
    }
}
