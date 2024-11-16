<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schoolsList = [
            ['label' => 'univ-orleans', 'name' => "Université d'Orléans", 'city' => 'Bourges', 'department' => 18, 'logo' => 'univ-orleans.png'],
            ['label' => 'ubp-clermont', 'name' => 'Université Blaise Pascal', 'city' => 'Aubière', 'department' => 63, 'logo' => 'ubp.png'],
            ['label' => 'ubp-vichy', 'name' => 'Université Blaise Pascal - Pôle Universitaire Vichy ', 'city' => 'Vichy', 'department' => 3, 'logo' => 'pole-ubp-vichy.png'],
            ['label' => 'actinuum', 'name' => 'Actinuum', 'city' => 'Paris', 'department' => 75, 'logo' => 'actinuum.png'],
            ['label' => 'design-crew', 'name' => 'Actinuum', 'city' => 'Paris', 'department' => 75, 'logo' => 'the-design-crew.png'],
        ];

        foreach ($schoolsList as $school) {
            School::create($school);
        }
    }
}
