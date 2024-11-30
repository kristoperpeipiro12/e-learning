<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Soal;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $soal = [];


        // $soal_mtk = ['1 + 1', '2 + 10', '3 + 1', '8 + 2'];
        // $soal_ing = ['Bahasa Indonesia dari coconut adalah', 'Bahasa Indonesia dari Kucing adalah', 'Bahasa Indonesia dari Anjing adalah', 'Bahasa Indonesia dari Ayah adalah'];

        // $jwb_mtk_a = ['1', '2', '3', '4'];
        // $jwb_mtk_b = ['2', '12', '4', '10'];
        // $jwb_mtk_c = ['4', '3', '2', '1'];

        // $kunci_jawaban = 'b';

        $tampung = [
            'soal_mtk' => [
                '1 + 1',
                '2 + 10',
                '3 + 1',
                '8 + 2'
            ],
            'soal_ing' => [
                'Bahasa Indonesia dari Kelapa adalah',
                'Bahasa Indonesia dari Kucing adalah',
                'Bahasa Indonesia dari Anjing adalah',
                'Bahasa Indonesia dari Ayah adalah'
            ],
            'jwb_mtk_a' => [
                '1',
                '2',
                '3',
                '4'
            ],
            'jwb_mtk_b' => [
                '2',
                '12',
                '4',
                '10'
            ],
            'jwb_mtk_c' => [
                '4',
                '3',
                '2',
                '1'
            ],
            'jwb_ing_a' => [
                'lol',
                'lol',
                'lol',
                'lol'
            ],
            'jwb_ing_b' => [
                'coconut',
                'cat',
                'dog',
                'father'
            ],
            'jwb_ing_c' => [
                'none',
                'none',
                'none',
                'none'
            ],
        ];

        foreach ($tampung['soal_mtk'] as $index => $pertanyaan) {
            $soal[] = [
                'id_mapel' => 'mp_1',
                'soal' => $pertanyaan,
                'pilihan_a' => $tampung['jwb_mtk_a'][$index],
                'pilihan_b' => $tampung['jwb_mtk_b'][$index],
                'pilihan_c' => $tampung['jwb_mtk_c'][$index],
                'kunci_jawaban' => 'b',
            ];
        }

        foreach ($tampung['soal_ing'] as $index => $pertanyaan) {
            $soal[] = [
                'id_mapel' => 'mp_2',
                'soal' => $pertanyaan,
                'pilihan_a' => $tampung['jwb_ing_a'][$index],
                'pilihan_b' => $tampung['jwb_ing_b'][$index],
                'pilihan_c' => $tampung['jwb_ing_c'][$index],
                'kunci_jawaban' => 'b',
            ];
        }

        Soal::insert($soal);

    }
}
