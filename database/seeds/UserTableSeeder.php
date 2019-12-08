<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hardcoded data but not in use due to loops in DatabaseSeeder file

        /*
        $k = new User;
        $k->name = "Nayeem";
        $k->email = "email@gmail.com";
        $k->password = "hello123";
        $k->save();
        */

        factory(App\User::class, 100)->create();
    }
}