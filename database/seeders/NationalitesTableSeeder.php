<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nationalites = [
            ['nom' => 'Burkinabè'],
            ['nom' => 'Malien'],
            ['nom' => 'Ivoirien'],
            ['nom' => 'Nigerien'],
            ['nom' => 'Ghanien'],
            ['nom' => 'Sengalais'],
        ];

        DB::table('nationalites')->insert($nationalites);
    }
}
