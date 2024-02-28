<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectors = [
            ['title' => 'Admin'],
            ['title' => 'Recruiter'],
            ['title' => 'Rh'],
            ['title' => 'User']
        ];

        foreach ($sectors as $sector) {
            Role::create($sector);
        }
        Role::create(['title' => 'Admin']);
        Role::create(['title' => 'Representative']);
        Role::create(['title' => 'Recruiter']);
        Role::create(['title' => 'User']);
    }
}
