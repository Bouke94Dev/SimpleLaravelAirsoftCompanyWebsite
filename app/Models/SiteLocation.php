<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteLocation extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'latitude', 'longitude'];
}
