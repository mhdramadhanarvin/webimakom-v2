<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Gallery::create([
                'category_gallery_id' => rand(1, 5),
                'caption' => fake()->text,
                'photo' => ''
            ]);
        }
    }
}
