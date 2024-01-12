<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ArticleCategory;
use App\Models\Article;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0;$i<5;$i++) {
          ArticleCategory::create([
            'name' => 'Kategori '. $i + 1
          ]);
        }

        Article::factory()->count(30)->create();
        Article::factory()->count(5)->create([
            'status' => false
        ]);
    }
}
