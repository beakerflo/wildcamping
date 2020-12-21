<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class FillRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('regions')->insertOrIgnore([
            array('name' => 'Australia and New Zealand', 'name_nl' => 'Australie en Nieuw Zeeland', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'OC'])->pluck('id')->first()),
            array('name' => 'Central Asia', 'name_nl' => 'Centraal Azie', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'AS'])->pluck('id')->first()),
            array('name' => 'Eastern Asia', 'name_nl' => 'Oost Azie', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'AS'])->pluck('id')->first()),
            array('name' => 'Eastern Europe', 'name_nl' => 'Oost Europa', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'EU'])->pluck('id')->first()),
            array('name' => 'Latin America and the Caribbean', 'name_nl' => 'Latijns Amerika en Caribisch gebied', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'SA'])->pluck('id')->first()),
            array('name' => 'Melanesia', 'name_nl' => 'Melanesie', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'OC'])->pluck('id')->first()),
            array('name' => 'Micronesia', 'name_nl' => 'Micronesie', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'OC'])->pluck('id')->first()),
            array('name' => 'Northern Africa', 'name_nl' => 'Noord Afrika', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'AF'])->pluck('id')->first()),
            array('name' => 'Northern America', 'name_nl' => 'Noord Amerika', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'NA'])->pluck('id')->first()),
            array('name' => 'Northern Europe', 'name_nl' => 'Noord Europa', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'EU'])->pluck('id')->first()),
            array('name' => 'Polynesia', 'name_nl' => 'Polynesie', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'OC'])->pluck('id')->first()),
            array('name' => 'South-eastern Asia', 'name_nl' => 'Zuid-Oost Azie', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'AS'])->pluck('id')->first()),
            array('name' => 'Southern Asia', 'name_nl' => 'Zuid Azie', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'AS'])->pluck('id')->first()),
            array('name' => 'Southern Europe', 'name_nl' => 'Zzuid Europa', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'EU'])->pluck('id')->first()),
            array('name' => 'Sub-Saharan Africa', 'name_nl' => 'Sub-Sahara', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'AF'])->pluck('id')->first()),
            array('name' => 'Western Asia', 'name_nl' => 'West Azie', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'AS'])->pluck('id')->first()),
            array('name' => 'Western Europe', 'name_nl' => 'West Europa', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'EU'])->pluck('id')->first()),
            array('name' => 'Antartica', 'name_nl' => 'Antartica', 'continent_id' => DB::table('continents')->Where(['iso_code' => 'AN'])->pluck('id')->first()),
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
        //
    }
}
