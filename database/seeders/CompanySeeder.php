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
        $companiesList = [
            0 => [
                'label' => 'coffreo',
                'name' => 'Coffreo',
                'city' => 'Aubière',
                'department' => 63,
                'url' => '',
                'logo' => '',
            ]
        ];

        foreach ($companiesList as $company) {
            Company::create($company);
        }
    }
}
