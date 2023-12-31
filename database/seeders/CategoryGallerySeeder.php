<?php

namespace Database\Seeders;

use App\Models\CategoryGallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 5; $i++) {
            CategoryGallery::create([
                'name' => "Kategori " . $i + 1
            ]);
        }
    }
}
