<?php

namespace Database\Seeders;

use App\Models\SiteImage;
use Illuminate\Database\Seeder;

class SiteImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            'images/site_one.svg',
            'images/site_two.svg',
            'images/site_three.svg',
        ];

        foreach ($images as $image) {
            SiteImage::create([
                'image' => $image,
            ]);
        }

    }
}
