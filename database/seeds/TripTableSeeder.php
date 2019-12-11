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
        factory(App\Trip::class, 100)->create();



        // Hardcoded data but not in use due to loops in DatabaseSeeder file
        
        /*
        $t1 = new Trip;
        $t1->trip_title = "Amazing trip!";
        $t1->city = "Swansea";
        $t1->trip_detail = "A quick trip through the city and the depressing, coursework filled, bay area";
        $t1->trip_start_date = "2019-11-11"; // Dates must be entered in the following format (WITH QUOTATIONS): "YYYY-MM-DD"
        $t1->trip_ended = false;
        $t1->trip_price = 350;
        $t1->trip_coordinator_id = 1;
        $t1-> save();
        $t1->users()->attach(1);
        

        $t2 = new Trip;
        $t2->trip_title = "Crap trip!";
        $t2->city = "Cardiff";
        $t2->trip_detail = "Cardiff, I guess (shrug_emoji)";
        $t2->trip_start_date = "2019-12-04"; // Dates must be entered in the following format (WITH QUOTATIONS): "YYYY-MM-DD"
        $t2->trip_ended = false;
        $t2->trip_price = 400;
        $t2->trip_coordinator_id = 2;
        $t2-> save();
        $t2->users()->attach(2);
        */
        
    }
}
