<?php

namespace Database\Seeders;

use App\Models\Gear;
use Illuminate\Database\Seeder;

class GearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $gear = [
            'Airsoft basic',
            'Airsoft basic with unlimited ammo',
            'Airsoft elite',
            'Airsoft elite with unlimited ammo',
        ];

        foreach ($gear as $item) {
            Gear::create(['name' => $item]);
        }
    }
}
