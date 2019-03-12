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
        DB::table('users')->delete();
        $lastNames = ['TOKO', 'ALLADATIN', 'HADJ'];
        $firstNames = ['Kafid', 'Judicaël', 'Yassr'];
        $offices = ['Chef scolarité central', 'Chef scolarité', 'Administrateur'];
        for ($i=1; $i < 4; $i++) {
            DB::table('users')->insert([
                'login' => 'Staff '.$i,
                'email' => 'staff'.$i.'@siabanni.com',
                'password' => Hash::make('admin'.$i),
                'admin' => true,
                'email_verified_at' => Carbon::now(),
                'step' => null,
                'rank' => $i
            ]);

            DB::table('staffs')->insert([
                'lastName' => $lastNames[$i-1],
                'firstName' => $firstNames[$i-1],
                'phone' => '96257898',
                'office' => $offices[$i-1],
                'school_id' => $i,
                'user_id' => $i
            ]);
        }
    }
}
