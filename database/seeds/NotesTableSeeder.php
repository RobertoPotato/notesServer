<?php

use Illuminate\Database\Seeder;
use App\Notes;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Truncate existing notes and start from scratch
        Notes::truncate();

        $faker = \Faker\Factory::create();

        //Seed db with a few notes
        for ($i = 0; $i < 50; $i++) {
            Notes::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
