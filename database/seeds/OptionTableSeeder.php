<?php

use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('options')->delete();

      for ($i=1; $i < 41; $i++) {
        DB::table('options')->insert([
          'code' => str_random(10),
          'name' => 'Option Number '.$i,
          'description' => 'Description ' .$i. ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'avatar' => 'options_avatars/siabanni_db.png',
          'training_id' => rand(1, 10)
        ]);
      }
    }
}
