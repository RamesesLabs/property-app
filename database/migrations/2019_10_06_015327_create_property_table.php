<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('property_name');
            $table->string('property_address');
            $table->year('year_built');
            $table->year('year_acquired');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('square_footage');
            $table->integer('initial_remodel_cost');
            $table->integer('estimated_monthly_rent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property');
    }
}
