<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Truncate existing notes and start from scratch
        Products::truncate();

        $faker = \Faker\Factory::create();

        //Seed db with a few notes
        for ($i = 0; $i < 50; $i++) {
            Products::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'price' => $faker->numberBetween($min = 3000, $max = 9000),
                'isNegotiable' => $faker->boolean($chanceOfGettingTrue = 70), // true
                'userContact' => $faker->e164PhoneNumber,
                'userId' => $faker->numberBetween($min = 1, $max = 10),
                //'title', 'description', 'imageUrl', price, isNegotiable, 'userId'
            ]);
        }
    }
}
