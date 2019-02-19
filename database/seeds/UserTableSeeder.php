<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        
        for ($i=1; $i < 3; $i++) {
            DB::table('users')->insert([
                'login' => 'Staff '.$i,
                'email' => 'staff'.$i.'@siabanni.com',
                'password' => Hash::make('admin'.$i),
                'admin' => true,
                'email_verified_at' => Carbon::now(),
                'step' => null,
                'rank' => $i
            ]);
        }
    }
}
