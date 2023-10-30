<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GsangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gsangs = [
            ['nom' => 'A'],
            ['nom' => 'B'],
            ['nom' => 'O'],
            ['nom' => 'AB'],
            
        ];

        DB::table('gsangs')->insert($gsangs);
    }
}
