<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\Workplan;

class WorkplanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0;$i<5;$i++) {
            Workplan::insert([
                'title' => 'Program Kerja '. $i + 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Donec adipiscing tristique risus nec feugiat in fermentum posuere urna. Tristique nulla aliquet enim tortor at auctor urna nunc id. Nunc lobortis mattis aliquam faucibus. Amet mattis vulputate enim nulla aliquet porttitor.',
                'start_date' => Carbon::now()->addMonths($i),
                'end_date' => Carbon::now()->addMonths($i)->addDays($i + 1),
            ]);
        }
    }
}
