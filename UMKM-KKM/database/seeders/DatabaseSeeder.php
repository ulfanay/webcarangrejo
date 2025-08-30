<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategoriesSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\posts;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call other seeders
        $this->call([
            CategoriesSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            posts::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ])->assignRole('admin');

        
        User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'user@test.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ])->assignRole('user');
    }
}
