<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Trip::class, 25)->create();

        // Hardcoding some data in for testing
        /*
        $t1 = new Trip;
        $t1->trip_title = "Amazing trip!";
        $t1->city = "Swansea";
        $t1->trip_detail = "A quick trip through the city and the depressing, coursework filled, bay area";
        $t1->trip_start_date = "2019-11-11"; // Dates must be entered in the following format (WITH QUOTATIONS): "YYYY-MM-DD"
        $t1->trip_ended = false;
        $t1->trip_price = 350;
        $t1-> save();
        */

        
    }
}
