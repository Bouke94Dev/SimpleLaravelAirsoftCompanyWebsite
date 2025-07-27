<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Site;
use App\Models\SiteLocation;
use App\Models\SiteImage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SiteControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexReturnsSitesViewWithSites()
    {

        $location = SiteLocation::create([
            'id' => '361ede6b-da49-4600-869a-0527592293b5',
            'name' => 'Test Location',
            'latitude' => 51.9225, 
            'longitude' => 4.47917
        ]);

        $image = SiteImage::create([
            'id' => '70417569-7631-4cd6-8501-1af871274087',
            'image' => 'https://example.com/test.jpg',
        ]);

        $site = Site::factory()->create([
            'site_location_id' => $location->id,
            'site_image_id' => $image->id,
        ]);

        $response = $this->get(route('sites.index'));

        $response->assertStatus(200);
        $response->assertViewIs('sites.index');
        $response->assertViewHas('sites', function ($sites) use ($site) {
            return $sites->contains($site);
        });
    }

    public function testShowReturnsSiteViewWithSite()
    {

        $location = SiteLocation::create([
            'id' => '361ede6b-da49-4600-869a-0527592293b5',
            'name' => 'Test Location',
            'latitude' => 51.9225, 
            'longitude' => 4.47917
        ]);

        $image = SiteImage::create([
            'id' => '70417569-7631-4cd6-8501-1af871274087',
            'image' => 'https://example.com/test.jpg',
        ]);

        $site = Site::factory()->create([
            'site_location_id' => $location->id,
            'site_image_id' => $image->id,
        ]);

        $response = $this->get(route('sites.show', ['id' => $site->id]));

        $response->assertStatus(200);
        $response->assertViewIs('sites.show');
        $response->assertViewHas('site', function ($viewSite) use ($site) {
            return $viewSite->id === $site->id;
        });
    }

    public function testFeedReturnsRssContentWithCorrectHeader()
    {

        $location = SiteLocation::create([
            'id' => '361ede6b-da49-4600-869a-0527592293b5',
            'name' => 'Test Location',
            'latitude' => 51.9225, 
            'longitude' => 4.47917
        ]);

        $image = SiteImage::create([
            'id' => '70417569-7631-4cd6-8501-1af871274087',
            'image' => 'https://example.com/test.jpg',
        ]);

        $site = Site::factory()->create([
            'site_location_id' => $location->id,
            'site_image_id' => $image->id,
        ]);

        $response = $this->get(route('sites.feed'));

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/rss+xml');
        $response->assertViewIs('rss.sites');
        $response->assertViewHas('sites', function ($sites) use ($site) {
            return $sites->contains($site);
        });
    }
}
