<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Division::create([
            'name' => 'Kominfo'
        ]);
        Division::create([
            'name' => 'Kewirausahaan'
        ]);
        Division::create([
            'name' => 'E-Sport'
        ]);
        Division::create([
            'name' => 'Humas'
        ]);
        Division::create([
            'name' => 'Pendidikan'
        ]);
        Division::create([
            'name' => 'Prestasi'
        ]);
    }
}
