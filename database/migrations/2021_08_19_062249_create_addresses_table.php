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
            $table->string('name')->unique();
            $table->foreignId('area_id');
            $table->foreignId('city_id');
            $table->string('street')->nullable();
            $table->string('house', 32)->nullable();
            $table->text('info')->nullable();
            $table->timestamps();

            $table->index('area_id', 'address_area_idx');
            $table->index('city_id', 'address_city_idx');
            $table->foreign('area_id', 'address_area_fk')->on('areas')->references('id');
            $table->foreign('city_id', 'address_city_fk')->on('cities')->references('id');
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
