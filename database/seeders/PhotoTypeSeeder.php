<?php

namespace Database\Seeders;

use App\Models\PhotoType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $photoTypesList = [
            ['label' => 'sky', 'name' => 'Sky', 'position' => 1],
            ['label' => 'nature', 'name' => 'Nature', 'position' => 2],
            ['label' => 'night', 'name' => 'Night', 'position' => 3],
            ['label' => 'city', 'name' => 'City', 'position' => 4],
            ['label' => 'ici-ailleurs', 'name' => 'Ici et ailleurs', 'position' => 5],
        ];

        foreach ($photoTypesList as $photoType) {
            PhotoType::create($photoType);
        }
    }
}
