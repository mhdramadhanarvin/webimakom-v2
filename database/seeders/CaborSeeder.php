<?php

namespace Database\Seeders;

use App\Models\Cabor;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaborSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cabor::create([
            "game_name" => "Valorant",
            "slug" => "valorant",
            "description" => "Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.",
            "thumbnail" => ""
        ]);

        Cabor::create([
            "game_name" => "PUBG Mobile",
            "slug" => "pubgm",
            "description" => "Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.",
            "thumbnail" => ""
        ]);

        Cabor::create([
            "game_name" => "Mobile Legends",
            "slug" => "mobile-legends",
            "description" => "Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.",
            "thumbnail" => ""
        ]);

        Cabor::create([
            "game_name" => "Free Fire",
            "slug" => "free-fire",
            "description" => "Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.",
            "thumbnail" => ""
        ]);

        Cabor::create([
            "game_name" => "PS Football",
            "slug" => "ps-football",
            "description" => "Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.",
            "thumbnail" => ""
        ]);

        Cabor::create([
            "game_name" => "Magic Chess Mobile Legends",
            "slug" => "magic-chess",
            "description" => "Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.",
            "thumbnail" => ""
        ]);

        Cabor::create([
            "game_name" => "Dynastones",
            "slug" => "dynastones",
            "description" => "Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.",
            "thumbnail" => ""
        ]);
    }
}
