<?php

namespace App\Http\Controllers;

use App\Models\SiteLocation;
use Illuminate\Http\JsonResponse;

class SiteLocationController extends Controller
{
    public function index(): JsonResponse
    {
        $locations = SiteLocation::all();

        return response()->json($locations);
    }

    public function show(string $id): JsonResponse
    {
        $location = SiteLocation::findorfail($id);
        $geojson = [
            'type' => 'FeatureCollection',
            'features' => [[
                'type' => 'Feature',
                'geometry' => [
                    'type' => 'Point',
                    'coordinates' => [(float) $location->longitude, (float) $location->latitude],
                ],
                'properties' => [
                    'name' => $location->name,
                ],
            ]],
        ];

        return response()->json($geojson);
    }
}
