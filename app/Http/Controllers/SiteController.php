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

    public function feed()
    {
        $sites = Site::with(['siteLocation', 'siteImage'])->get();

        $rss = view('rss.sites', compact('sites'));

        return response($rss, 200)->header('Content-type', 'application/rss+xml');
    }
}
