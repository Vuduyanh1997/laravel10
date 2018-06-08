<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder​ extends Seeder
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
            DB::table('posts')->insert([ //,
                'title' => $faker->text($maxNbChars = 100),
                'thumbnail' => $faker->imageUrl($width = 640, $height = 480),
                'description' => $faker->text($maxNbChars = 500),
        		'content' => $faker->text($maxNbChars = 10000),
        		'slug' =>$faker->slug(),
        		'user_id' => 1,
        		'category_id' => 1
            ]);
        }
    }
}
