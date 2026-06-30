<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(

            [
                'username' => 'ichwan',
            ],

            [
                'name' => 'Muhammad Ichwan',

                'username' => 'ichwan',

                'email' => 'admin',

                'password' => Hash::make('admin123'),

                'role' => 'Admin',

                'status' => 'Aktif',

                'foto' => null,
            ]

        );
    }
}