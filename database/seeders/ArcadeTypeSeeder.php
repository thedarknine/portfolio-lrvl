<?php

namespace Database\Seeders;

use App\Models\ArcadeType;
use Illuminate\Database\Seeder;

class ArcadeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arcadeTypesList = [
            ['label' => 'final', 'name' => 'This is it!', 'position' => 1],
            ['label' => 'at-the-beginning', 'name' => 'Les plans', 'position' => 2],
            ['label' => 'side-panels', 'name' => 'Side Panels', 'position' => 3],
            ['label' => 'control-panel', 'name' => 'Control Panel', 'position' => 4],
            ['label' => 'upper-part', 'name' => 'Upper Part', 'position' => 5],
            ['label' => 'back-side', 'name' => 'Back Side', 'position' => 6],
            ['label' => 'assembling', 'name' => 'Assemblage', 'position' => 7],
            ['label' => 'design', 'name' => 'Design', 'position' => 8],
            ['label' => 'recalbox', 'name' => 'Recalbox', 'position' => 9],
            ['label' => 'materiel', 'name' => 'Matériel', 'position' => 10],
            ['label' => 'composants', 'name' => 'Composants', 'position' => 11],
        ];

        foreach ($arcadeTypesList as $arcadeType) {
            ArcadeType::create($arcadeType);
        }
    }
}
