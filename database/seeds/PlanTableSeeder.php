<?php

use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->delete();
        $admissions = [10, 12, 14, 16, 18, 20, 22, 24, 26, 28];
        $fees = [400, 450, 500, 550, 600, 650, 700, 750, 775, 800];
        for ($i=1; $i < 10; $i++) {
            DB::table('plans')->insert([
                'name' => 'Admission Training '.$i,
                'slug' => 'adtr'.$i,
                'stripe_plan' => 'Admission Training '.$i,
                'cost' => $admissions[$i],
                'description' => 'Description ' .$i. ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'training_id' => $i
            ]);

            DB::table('plans')->insert([
                'name' => 'Fees Training '.$i,
                'slug' => 'fetr'.$i,
                'stripe_plan' => 'Fees Training '.$i,
                'cost' => $fees[$i],
                'description' => 'Description ' .$i. ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'training_id' => $i
            ]);
        }
    }
}
