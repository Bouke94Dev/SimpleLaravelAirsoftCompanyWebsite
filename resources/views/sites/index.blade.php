@extends("layouts.app")

@section("title", "Locations")

@section("body")
    <section class="min-h-screen py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-800 sm:text-4xl">
                    Choose Your Battlefield: Experience Our Unique Paintball Locations
                </h2>
                <p class="mt-4 text-lg text-gray-600">
                    Make your next adventure unforgettable by selecting from our diverse range of paintball locations.
                    Each venue offers a one-of-a-kind setting designed to immerse you in thrilling tactical battles,
                    whether you prefer urban warfare, dense woodland, or open fields. Our carefully crafted arenas
                    deliver excitement, challenge, and fun for players of all skill levels. Choose your location and
                    gear up for an adrenaline-pumping paintball experience like no other!
                </p>
            </div>

            @foreach ($sites as $site)
                <a
                    href="{{ route("sites.show", $site->id) }}"
                    class="cursor-pointer flex items-center justify-between bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl transition mt-4 mb-4 p-4"
                >
                    <!-- Afbeelding + tekst "hi" in één flex-item -->
                    <div class="flex items-center">
                        <div class="flex flex-col bg-white shadow-md rounded-lg overflow-hidden p-4">
                            <img
                                src="{{ asset($site->siteImage->image) }}"
                                alt="Card Image"
                                class="rounded mb-2 w-38 h-28 object-cover"
                            />
                        </div>
                        <div class="ml-6 text-xl">
                            {{ $site->name }}
                        </div>
                    </div>

                    <!-- Locatie tekst aan de rechterkant -->
                    <div class="text-xl font-bold">
                        {{ $site->siteLocation->name }}
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
