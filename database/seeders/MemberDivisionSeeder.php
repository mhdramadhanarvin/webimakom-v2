<?php

namespace Database\Seeders;

use App\Enums\PositionEnum;
use App\Models\Division;
use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $division = Division::get();

        foreach ($division as $div) {
            Member::create([
                'name' => "Ketua Divisi",
                'position' => PositionEnum::Leader,
                'division_id' => $div->id
            ]);
            Member::create([
                'name' => "Anggota",
                'position' => PositionEnum::Member,
                'division_id' => $div->id
            ]);
        }
    }
}
