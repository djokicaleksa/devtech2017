<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,100) as $index) {
	        DB::table('bins')->insert([
	            'long' => $faker->longitude($min = 20, $max = 50),
	            'lat' => $faker->latitude($min = 20, $max = 50),
	            'status' => 1,
	        ]);
	    }    
    }
}
