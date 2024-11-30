<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;
use Illuminate\Support\Str;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [];

        $names_mp1 = ["Ayu", "Budi", "Citra", "Dewi", "Eka", "Fajar", "Gita", "Hadi", "Indah", "Joko", "Kiki", "Lina", "Maya", "Niko", "Ocha", "Putri", "Raka", "Sari", "Tono", "Uli", "Vina", "Wawan", "Xenia", "Yogi", "Zara", "Andi", "Bunga", "Cipto", "Dina", "Edo"];
        $names_mp2 = ["Fani", "Gilang", "Hana", "Iqbal", "Jihan", "Kamal", "Lutfi", "Mira", "Nana", "Omar", "Prita", "Qory", "Rian", "Sinta", "Tari", "Umar", "Vega", "Winda", "Xaverius", "Yulia"];
        // $names_mp3 = ["Adi", "Bella", "Cindy", "Dani", "Erwin", "Farah", "Galih", "Hilda", "Irfan", "Jefri", "Karin", "Lutfi", "Mila", "Novi", "Oki", "Pandu", "Qiana", "Riko", "Santi", "Tegar", "Ujang", "Vino", "Wulan", "Xeni", "Yoga", "Zaki", "Anita", "Bagas", "Ciko", "Dinda", "Eri", "Fira", "Gita", "Hani", "Indra", "Jodi", "Kirana", "Lila", "Miko", "Nadia", "Okta", "Pebi", "Qisya", "Rangga", "Siska"];

        foreach ($names_mp1 as $name) {
            $players[] = [
                'id_player' => Str::uuid()->toString(),
                'id_mapel' => 'mp_1',
                'username' => $name,
                'score' => rand(50, 100)
            ];
        }

        foreach ($names_mp2 as $name) {
            $players[] = [
                'id_player' => Str::uuid()->toString(),
                'id_mapel' => 'mp_2',
                'username' => $name,
                'score' => rand(50, 100)
            ];
        }

        // foreach ($names_mp3 as $name) {
        //     $players[] = [
        //         'id_player' => Str::uuid()->toString(),
        //         'id_mapel' => 'mp_3',
        //         'username' => $name,
        //         'score' => rand(50, 100)
        //     ];
        // }

        Player::insert($players);
    }
}