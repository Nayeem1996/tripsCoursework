<?php

use Illuminate\Database\Seeder;
use App\UserContactInfo;

class UserContactInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserContactInfo::class, 100)->create();
    }
}