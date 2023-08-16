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
        $data = [
            [
                'name' => 'paung',
                'email' => 'paung@gmail.com',
                'roles' => 'User',
                'password' => bcrypt('paung')
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'roles' => 'Admin',
                'password' => bcrypt('admin')
            ]
        ];

        foreach ($data as $key => $value) {
            User::create($value);
        }

    }
}
