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
        $faker = Faker\Factory::create();

	    for($i = 0; $i < 100000; $i++) {
	        App\StaffDetails::create([
	            'firstname' => $faker->userName,
	            'lastname' => $faker->name,
	            'email' => $faker->email,
	            'telephone' => $faker->phoneNumber
	        ]);
	    }
    }
}
