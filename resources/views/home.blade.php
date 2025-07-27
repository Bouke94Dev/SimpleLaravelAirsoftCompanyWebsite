@extends("layouts.app")

@section("title", "Home")

@section("body")
    <section class="min-h-screen py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-800 sm:text-4xl">
                    Experience the Thrill of Airsoft Like Never Before!
                </h2>
                <p class="mt-4 text-lg text-gray-600">
                    Get ready to dive into an action-packed adventure where strategy meets adrenaline. Whether you're a
                    seasoned pro or a first-time player, our airsoft arenas offer the perfect battleground for
                    unforgettable moments.
                </p>
            </div>
            <!-- Cards -->
            <div class="max-w-6xl mx-auto px-4 py-8 grid gap-8 sm:grid-cols-1 md:grid-cols-2">
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl transition flex flex-col">
                    <img
                        src="{{ asset("images/location_image.jpg") }}"
                        alt="Location image"
                        class="w-full h-48 object-cover"
                    />
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">
                            Discover Our Airsoft Locations Across the Country
                        </h3>
                        <p class="text-gray-600 mb-6 flex-grow">
                            Experience airsoft like never before—whether you crave intense action in dense woodland,
                            tactical missions on an industrial site, or fast-paced games by the beach, we have something
                            for every adventurer. Curious where your next mission will take you? Explore all our
                            locations and find out how you can enjoy airsoft exactly the way you want
                        </p>
                        <a
                            href="{{ route("sites.index") }}"
                            class="inline-block px-6 py-2 border border-gray-300 rounded-full text-gray-700 hover:bg-gray-800 hover:text-white transition mt-auto w-max"
                        >
                            View locations
                        </a>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl transition flex flex-col">
                    <img
                        src="{{ asset("images/booking_image.jpg") }}"
                        alt="Booking image"
                        class="w-full h-48 object-cover"
                    />
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Book Your Next Airsoft Adventure Here</h3>
                        <p class="text-gray-600 mb-6 flex-grow">
                            No matter your playstyle or the setting you dream of, your perfect airsoft adventure is just
                            a click away. Discover the full list and start planning your next game!
                        </p>
                        <a
                            href="#"
                            class="inline-block px-6 py-2 border border-gray-300 rounded-full text-gray-700 hover:bg-gray-800 hover:text-white transition mt-auto w-max"
                        >
                            Book reservation
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA -->
        <div class="mt-16 text-center">
            <h3 class="text-2xl font-bold">Ready to book an adventure?</h3>
            <p class="text-gray-600 mb-6">Explore our locations or book a reservation now!</p>
        </div>
    </section>
@endsection
