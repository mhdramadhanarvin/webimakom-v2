<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Content::create([
            'name'  => 'content',
            'content' => '<b>Pekan Esport Vol.2</b> adalah perlombaan E-Sport tahunan yang diselenggarakan oleh Ikatan Mahasiswa Komputer (IMAKOM) dan BEM Fakultas Sains dan Teknologi (FASTEK) Universitas Pembangunan Panca Budi Medan yang akan diselenggarakan pada tanggal 1 Januari 2024'
        ]);
    }
}
