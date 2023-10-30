<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtudiantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nationalites = DB::table('nationalites')->pluck('id');
    $villes = DB::table('villes')->pluck('id');
    $groupes_sanguins = DB::table('gsang')->pluck('id');

    foreach (range(1, 50) as $index) {
        DB::table('etudiants')->insert([
            'nationalite_id' => $nationalites->random(),
            'ville_id' => $villes->random(),
            'gsang_id' => $groupes_sanguins->random(),
            
        ]);
    }
    }
}
