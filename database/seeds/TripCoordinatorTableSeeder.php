<?php

use Illuminate\Database\Seeder;
use App\TripCoordinator;

class TripCoordinatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TripCoordinator::class, 5)->create();
    }
}
