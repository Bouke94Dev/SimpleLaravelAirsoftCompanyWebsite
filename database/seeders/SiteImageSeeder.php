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
            'images/site_one.jpg',
            'images/site_two.jpg',
            'images/site_three.jpg',
        ];

        foreach ($images as $image) {
            SiteImage::create([
                'image' => $image,
            ]);
        }

    }
}
