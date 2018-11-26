<?php

use Illuminate\Database\Seeder;

class TrainingTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('trainings')->delete();

      for ($i=1; $i < 11; $i++) {
        DB::table('trainings')->insert([
          'code' => str_random(10),
          'name' => 'Training Number '.$i,
          'description' => 'Description ' .$i. ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'fees' => rand(200000, 450000),
          'admissionFees' => rand(5000, 15000),
          'school_id' => rand(1, 10)
        ]);
      }
    }
}
