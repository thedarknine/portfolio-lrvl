<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companiesList = [
            ['label' => 'limos', 'name' => "LIMOS (Laboratoire d'Informatique, de Modélisation et d'Optimisation des Systèmes)", 'city' => 'Aubière', 'department' => 63, 'url' => '', 'logo' => 'limos.png'],
            ['label' => 'periscope-creations', 'name' => 'Periscope Créations', 'city' => 'Clermont-Ferrand', 'department' => 63, 'url' => '', 'logo' => 'periscope.png'],
            ['label' => 'actif-design', 'name' => 'ActifDesign', 'city' => 'Les Martres-de-Veyre', 'department' => 63, 'url' => '', 'logo' => 'actif-design.png'],
            ['label' => 'allegorithmic', 'name' => 'Allegorithmic', 'city' => 'Clermont-Ferrand', 'department' => 63, 'url' => '', 'logo' => 'allegorithmic.png'],
            ['label' => 'mfpdd', 'name' => 'Mutualité Française du Puy-de-Dôme', 'city' => 'Clermont-Ferrand', 'department' => 63, 'url' => '', 'logo' => 'mutualite.png'],
            ['label' => 'coffreo', 'name' => 'Coffreo', 'city' => 'Aubière', 'department' => 63, 'url' => '', 'logo' => 'coffreo.png'],
            ['label' => 'perfect-memory', 'name' => 'Perfect Memory', 'city' => 'Chamalières', 'department' => 63, 'url' => '', 'logo' => 'perfect-memory.png'],
        ];

        foreach ($companiesList as $company) {
            Company::create($company);
        }
    }
}
