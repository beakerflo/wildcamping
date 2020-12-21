<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class FillContinentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('continents')->insertOrIgnore([
            array('iso_code' => 'AF', 'name' => 'Africa', 'name_nl' => 'Afrika'),
            array('iso_code' => 'NA', 'name' => 'North America', 'name_nl' => 'Noord-Amerika'),
            array('iso_code' => 'OC', 'name' => 'Oceania', 'name_nl' => 'Oceanie'),
            array('iso_code' => 'AN', 'name' => 'Antarctica', 'name_nl' => 'Antartica'),
            array('iso_code' => 'AS', 'name' => 'Asia', 'name_nl' => 'Azie'),
            array('iso_code' => 'EU', 'name' => 'Europe', 'name_nl' => 'Europa'),
            array('iso_code' => 'SA', 'name' => 'South America', 'name_nl' => 'Zuid-Amerika')
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
