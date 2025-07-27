<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Site extends Model
{
    /** @use HasFactory<\Database\Factories\SiteFactory> */
    use HasFactory;

    public $timestamps = false;

    public function siteLocation()
    {
        return $this->belongsTo(SiteLocation::class);
    }

    public function siteImage(): BelongsTo
    {
        return $this->belongsTo(SiteImage::class);
    }

    protected $fillable = [
        'site_image_id',
        'name',
        'site_location_id',
        'address',
        'postcode',
    ];
}
