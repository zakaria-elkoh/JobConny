<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectors = [
            ['title' => 'IT'],
            ['title' => 'health'],
            ['title' => 'Gov']
        ];

        foreach ($sectors as $sector) {
            Sector::create($sector);
        }
    }
}
