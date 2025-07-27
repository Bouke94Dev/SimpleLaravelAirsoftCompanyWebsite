<?php

namespace App\Models;

use App\Models\SiteLocation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
