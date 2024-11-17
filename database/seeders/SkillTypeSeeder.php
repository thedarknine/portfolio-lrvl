<?php

/**
 * This file is part of the Portfolio project.
 * (c) Caroline Noyer <hello@carolinenoyer.fr>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Database\Seeders;

use App\Models\SkillType;
use Illuminate\Database\Seeder;

class SkillTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skillTypesList = [
            ['label' => 'methodo', 'name' => 'Méthodologie et Agilité', 'logo' => 'skills-methodologie.png', 'position' => 1],
            ['label' => 'design', 'name' => 'Design', 'logo' => 'skills-design.png', 'position' => 2],
            ['label' => 'back-end', 'name' => 'Back-End', 'logo' => 'skills-backend.png', 'position' => 3],
            ['label' => 'front-end', 'name' => 'Front-End', 'logo' => 'skills-frontend.png', 'position' => 4],
            ['label' => 'sysadmin', 'name' => 'Systèmes et Administration', 'logo' => 'skills-sysadmin.png', 'position' => 5],
        ];

        foreach ($skillTypesList as $skillType) {
            SkillType::create($skillType);
        }
    }
}
