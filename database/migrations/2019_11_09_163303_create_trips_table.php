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
            $table->string("trip_detail");
            
            // Dates must be entered in the following format (WITH QUOTATIONS): "YYYY-MM-DD"
            $table->date("trip_start_date");
            $table->boolean("trip_ended") -> default(false);
            $table->float("trip_price");
            $table->timestamps();

            $table->bigInteger("trip_coordinator_id")->unsigned();

            $table->foreign("trip_coordinator_id")->references("id")->on("trip_coordinators")
                ->onUpdate("cascade");
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
