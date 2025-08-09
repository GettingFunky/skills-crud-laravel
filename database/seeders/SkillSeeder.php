<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    Skill::factory()
        ->count(50)
        ->create();

        //         DB::table('skills')->insert([
        //     'name' => Str::random(10),
        //     'description'=> Str::random(100),
        //     'category'=> Str::random(10)
        // ]);
}
}
