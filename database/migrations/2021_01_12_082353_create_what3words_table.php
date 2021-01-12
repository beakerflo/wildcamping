<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhat3wordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('what3words', function (Blueprint $table) {
            $table->id();
            $table->string('en')->nullable()->unique();
            $table->string('nl')->nullable()->unique();
            $table->string('fr')->nullable()->unique();
            $table->string('de')->nullable()->unique();
            $table->string('es')->nullable()->unique();
            $table->timestamps();
            $table->unique(['en', 'nl', 'fr', 'de', 'es']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('what3words');
    }
}
