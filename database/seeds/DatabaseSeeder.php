<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(UserContactInfoTableSeeder::class);
        $this->call(TripCoordinatorTableSeeder::class);
        $this->call(TripTableSeeder::class);

        foreach (App\Trip::all() as $trip){
            foreach(App\User::all() as $user){
                $trip->users()->attach($user->id);
            }
        }
    }
}