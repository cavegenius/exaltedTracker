<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abilities', function($table) {
            $table->string('archeryText')->default('')->after('archery');
            $table->string('athleticsText')->default('')->after('athletics');
            $table->string('awarenessText')->default('')->after('awareness');
            $table->string('brawlText')->default('')->after('brawl');
            $table->string('bureaucracyText')->default('')->after('bureaucracy');
            $table->string('craftText')->default('')->after('craft');
            $table->string('dodgeText')->default('')->after('dodge');
            $table->string('integrityText')->default('')->after('integrity');
            $table->string('investigationText')->default('')->after('investigation');
            $table->string('larcenyText')->default('')->after('larceny');
            $table->string('linguisticsText')->default('')->after('linguistics');
            $table->string('loreText')->default('')->after('lore');
            $table->string('martialArtsText')->default('')->after('martialArts');
            $table->string('medicineText')->default('')->after('medicine');
            $table->string('meleeText')->default('')->after('melee');
            $table->string('occultText')->default('')->after('occult');
            $table->string('performanceText')->default('')->after('performance');
            $table->string('presenceText')->default('')->after('presence');
            $table->string('resistanceText')->default('')->after('resistance');
            $table->string('rideText')->default('')->after('ride');
            $table->string('sailText')->default('')->after('sail');
            $table->string('socializeText')->default('')->after('socialize');
            $table->string('stealthText')->default('')->after('stealth');
            $table->string('survivalText')->default('')->after('survival');
            $table->string('thrownText')->default('')->after('thrown');
            $table->string('warText')->default('')->after('war');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
