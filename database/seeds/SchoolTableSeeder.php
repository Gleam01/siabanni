<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
  private function randNumber()
  {
    $numbers = [
      '+229 94'.str_random(6),
      '+229 96'.str_random(6),
      '+229 90'.str_random(6),
      '+229 99'.str_random(6)
    ];
    $i = rand(0, 3);

    return $numbers[$i];
  }
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('schools')->delete();

      for ($i=1; $i < 11; $i++) {
        DB::table('schools')->insert([
          'name' => 'School Number '.$i,
          'description' => 'Description ' .$i. ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'contact' => $this->randNumber()
        ]);
      }
    }
}
