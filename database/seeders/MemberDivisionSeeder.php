<?php

namespace Database\Seeders;

use App\Enums\MemberPositionEnum;
use App\Models\Division;
use App\Models\Member;
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
                'position' => MemberPositionEnum::Leader,
                'division_id' => $div->id
            ]);
            Member::create([
                'name' => "Anggota",
                'position' => MemberPositionEnum::Member,
                'division_id' => $div->id
            ]);
        }
    }
}
