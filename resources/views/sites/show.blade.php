@extends("layouts.app")

@section("title", "Location")

@section("body")
    <div class="min-h-screen flex items-center justify-center bg-white">
        <div class="max-w-5xl w-full p-6 shadow-md">
            <div class="flex justify-between items-center mb-4">
                <a href="{{ route("sites.index") }}" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-black">
                    Go back
                </a>
                <h1 class="text-3xl font-bold">{{ $site->name }}</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2 bg-white shadow overflow-hidden">
                    <div
                        id="map"
                        data-location-id="{{ $site->site_location_id }}"
                        class="w-full"
                        style="height: 500px"
                    ></div>
                </div>
                <div class="space-y-6">
                    <img
                        src="{{ asset($site->siteImage->image) }}"
                        alt="Site Image"
                        class="rounded shadow w-full object-cover h-48"
                    />
                    <div>
                        <h2 class="text-xl font-semibold mb-2">Description</h2>
                        <p class="text-gray-700">{{ $site->description }}</p>
                    </div>

                    <div>
                        <h2 class="text-xl font-semibold mb-2">Contact</h2>
                        <p>
                            <strong>Adres:</strong>
                            {{ $site->address }}
                        </p>
                        <p>
                            <strong>Postcode:</strong>
                            {{ $site->postcode }}
                        </p>
                        <p>
                            <strong>Locatie:</strong>
                            {{ $site->siteLocation->name }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
