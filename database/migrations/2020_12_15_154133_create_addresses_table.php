<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('road')->nullable();
            $table->string('postcode', 10)->nullable();
            $table->string('part')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->foreignId('country_id');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['road', 'postcode', 'city']);
            $table->unique(['road', 'city']);
            $table->unique(['postcode', 'city']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
