<?php

namespace Tests\Feature;

use App\Models\Gear;
use App\Models\Site;
use App\Models\SiteImage;
use App\Models\SiteLocation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class ReservationControllerTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_can_create_a_reservation()
    {

        $location = SiteLocation::create([
            'id' => '361ede6b-da49-4600-869a-0527592293b5',
            'name' => 'Test Location',
            'latitude' => 51.9225,
            'longitude' => 4.47917,
        ]);

        $image = SiteImage::create([
            'id' => '70417569-7631-4cd6-8501-1af871274087',
            'image' => 'https://example.com/test.jpg',
        ]);

        $gear = Gear::create([
            'id' => '70417569-7631-4cd6-8501-1af871274087',
            'gear' => 'Airsoft basic',
        ]);

        $site = Site::factory()->create([
            'site_location_id' => $location->id,
            'site_image_id' => $image->id,
        ]);

        $user = User::factory()->create();
        $site = Site::factory()->create();

        $response = $this->actingAs($user)->post(route('reservation.store'), [
            'site_id' => $site->id,
            'gear_id' => $gear->id,
            'start_date' => now()->addDays(3)->format('Y-m-d'),
            'player_amount' => 8,
            'note' => 'Test reservation note',
        ]);

        $response->assertRedirect(route('reservation.create'));
        $response->assertSessionHas('success', 'Reservation created!');

        $this->assertDatabaseHas('reservations', [
            'site_id' => $site->id,
            'gear_id' => $gear->id,
            'player_amount' => 8,
            'note' => 'Test reservation note',
        ]);
    }

    #[Test]
    public function it_validates_required_fields()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('reservation.store'), []);

        $response->assertSessionHasErrors([
            'site_id', 'gear_id', 'start_date', 'player_amount',
        ]);
    }
}
