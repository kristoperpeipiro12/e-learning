<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mapels')->insert([
            [
                'id_mapel' => 'mp_1',
                'mapel' => 'Matematika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_mapel' => 'mp_2',
                'mapel' => 'Bahasa Inggris',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
