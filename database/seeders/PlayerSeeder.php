<?php

namespace Database\Seeders;

use App\Models\Player;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
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

        foreach ($names_mp1 as $name) {
            $randomDate = Carbon::create(2024, rand(1, 12), rand(1, 28), rand(0, 23), rand(0, 59), rand(0, 59));
            $players[]  = [
                'id_player'  => Str::uuid()->toString(),
                'id_mapel'   => 'mp_1',
                'username'   => $name,
                'score'      => rand(50, 100),
                'created_at' => $randomDate,
                'updated_at' => $randomDate,
            ];
        }

        foreach ($names_mp2 as $name) {
            $randomDate = Carbon::create(2024, rand(1, 12), rand(1, 28), rand(0, 23), rand(0, 59), rand(0, 59));
            $players[]  = [
                'id_player'  => Str::uuid()->toString(),
                'id_mapel'   => 'mp_2',
                'username'   => $name,
                'score'      => rand(50, 100),
                'created_at' => $randomDate,
                'updated_at' => $randomDate,
            ];
        }

        Player::insert($players);
    }
}