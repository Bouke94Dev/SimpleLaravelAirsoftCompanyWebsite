<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function site(): BelongsTo
    {
        return $this->belongsTo(Site::class);
    }

    public function gear(): BelongsTo
    {
        return $this->belongsTo(Gear::class);
    }

    protected $fillable = [
        'user_id',
        'site_id',
        'booking_date',
        'start_date',
        'player_amount',
        'gear_id',
        'note',
    ];
}
