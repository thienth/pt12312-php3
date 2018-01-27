<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 1000; $i++) { 
        	DB::table('products')->insert([
        		'product_name' => $faker->name,
        		'price' => $faker->randomNumber(3),
        		'cate_id' => rand(1, 10),
        		'description' => $faker->text(150)
        	]);
        }
    }
}
