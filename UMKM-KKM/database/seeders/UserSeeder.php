<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ])->assignRole('admin');

        $user = \App\Models\User::create([
            'name' => 'User',
            'email' => 'user@example.cpm',
            'password' => bcrypt('password'),
            'role' => 'user',
        ])->assignRole('user');
    }
}
