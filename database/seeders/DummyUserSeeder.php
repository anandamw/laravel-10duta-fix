<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data  = [
            [
                "name" => "ananda",
                "email" => "ananda@gmail.com",
                "password" => bcrypt(123),
                "role" => "mahasiswa"
            ],   [
                "name" => "Admin",
                "email" => "admin@gmail.com",
                "password" => bcrypt(123),
                "role" => "admin"
            ]

        ];

        foreach ($data as $item) {
            User::create($item);
        }
    }
}
