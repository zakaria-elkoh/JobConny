<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::insert([
            ['title' => 'JAVA'],
            ['title' => 'CSS'],
            ['title' => 'HTML'],
            ['title' => 'Bootstrap'],
            ['title' => 'Tailwind'],
            ['title' => 'Laravel'],
            ['title' => 'PHP'],
            ['title' => 'UML'],
        ]);
    }
}
