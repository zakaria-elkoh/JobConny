<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'The first company',
            'email' => 'company1@gmail.com',
            'phone' => '0606060606',
            'adress' => 'this, is the adress.',
            'description' => 'this is the description of this company 1.',
        ]);

        Company::create([
            'name' => 'The second company',
            'email' => 'company2@gmail.com',
            'phone' => '0606061212',
            'adress' => 'this is the adress.',
            'description' => 'this, is the description of this company 2.',
        ]);
    }
}
