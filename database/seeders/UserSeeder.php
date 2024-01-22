<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
       
        DB::table('users')->insert([
            [
                'name' => 'Kairuy Kuyrai',
                'email' => 'jsnvrh13@gmail.com',
                'password' => Hash::make('123456'),
                'address' => 'My House',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
            ]);
    }
}
