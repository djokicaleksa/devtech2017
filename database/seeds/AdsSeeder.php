<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,50) as $index) {
    		$name = str_random();
    		try {
                $image = Cloudder::upload('http://lorempixel.com/1920/1080/sports/', $name, ["categorization" => "aws_rek_tagging"]);
            }catch (Exception $e) {
                echo $e;
            }

	        DB::table('ads')->insert([
	            'name' => $faker->catchPhrase(),
	            'image' => $name,
	            'user_id' => 1
	        ]);
	    }    
    }
}
