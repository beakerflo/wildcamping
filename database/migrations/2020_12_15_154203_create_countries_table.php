<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('iso_code_2', 2);
            $table->string('iso_code_3', 3);
            $table->string('fips_code', 2)->nullable();
            $table->integer('iso_number');
            $table->string('name');
            $table->string('name_nl');
            $table->string('name_fr');
            $table->string('name_es');
            $table->string('name_formal')->nullable();
            $table->string('capital')->nullable();
            $table->integer('dial_code')->nullable();
            $table->string('fifa_code')->nullable();
            $table->string('tld')->nullable();
            $table->integer('population')->unsigned()->nullable();
            $table->string('is_independent');
            $table->foreignId('currency_id')->nullable();
            $table->foreignId('region_id')->nullable();
            $table->unique('iso_code_2');
            $table->unique('iso_code_3');
            $table->unique('iso_number');
            $table->unique('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
