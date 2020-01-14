<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Truncate the table first
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('frosty');
        //create the main admin
        User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => $password
        ]);

        //Create a few more 'regular' users
        for ($i = 0; $i < 9; $i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password
            ]);
        }
    }
}
