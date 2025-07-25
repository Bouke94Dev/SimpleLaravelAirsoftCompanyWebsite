<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteImage extends Model
{
    /** @use HasFactory<\Database\Factories\SiteImageFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['image'];
}
