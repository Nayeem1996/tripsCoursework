<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("trip_title");
            $table->string("city");
            
            // Dates must be entered in the following format (WITH QUOTATIONS): "YYYY-MM-DD"
            $table->date("tripStartDate");
            $table->boolean("tripEnded") -> default(false);
            $table->float("tripPrice");
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
        Schema::dropIfExists('trips');
    }
}
