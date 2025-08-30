<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Pemerintah Desa',
            'Pembangunan Desa',
            'Pendidikan',
            'Kesehatan',
            'Sosial',
            'Olahraga',
            'Keagamaan',
            'Lingkungan',
            'Informasi Umum',
            'Teknologi',
            'Ekonomi',
            'Budaya',
            'Sejarah',
            'Lingkungan',
            'Hiburan',
            
        ];

        foreach ($categories as $name) {
            categories::create([
                'name' => $name,
                'slug' => Str::slug($name)
            ]);
        }
    }
}
