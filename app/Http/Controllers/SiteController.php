<?php

namespace App\Http\Controllers;

use App\Models\Site;

class SiteController extends Controller
{
    public function index()
    {
        $sites = Site::with(['siteLocation', 'siteImage'])->get();
        return view('sites.index', compact('sites'));
    }

    public function show(string $id)
    {
        $site = Site::with(['siteLocation', 'siteImage'])->findOrFail($id);
        return view('sites.show', compact('site'));
    }
}