<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_language', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id');
            $table->foreignId('language_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('country_language', function (Blueprint $table) {
            Schema::dropIfExists('country_language');
        });
    }
}