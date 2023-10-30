<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villes = [
            ['nom' => 'OUAGADOUGOU'],
            ['nom' => 'BAMAKO'],
            ['nom' => 'ABIDJAN'],
            ['nom' => 'NIAMEY'],
            ['nom' => 'ACCRA'],
            ['nom' => 'DAKAR'],
        ];

        DB::table('villes')->insert($villes);
    }
}
