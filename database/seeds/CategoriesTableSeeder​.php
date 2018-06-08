<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder​ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
    	for ($i = 0; $i < 50; $i++) {
            DB::table('categories')->insert([ //,
                'name' => $faker->name,
        		'thumbnail' => $faker->imageUrl($width = 640, $height = 480),
        		'description' => $faker->text($maxNbChars = 500),
        		'slug' =>$faker->slug(),
            ]);
        }
    }
}
