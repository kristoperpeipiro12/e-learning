<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $userdata = [
            [
                'username' => 'guru',
                'password' => Hash::make('1234'),
            ],
        ];
        foreach ($userdata as $data) {
            User::create($data);
        }
    }
}