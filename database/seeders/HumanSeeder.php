<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('humans')->insert([
            [
        
                'human_name' => 'A',
                'human_type' => 1,
                'price' => '55555',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
        
                'human_name' => 'B',
                'human_type' => 1,
                'price' => '12345',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
        
                'human_name' => 'C',
                'human_type' => 2,
                'price' => '20000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
        
                'human_name' => 'X',
                'human_type' => 2,
                'price' => '10000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
            ]);
    }
}
