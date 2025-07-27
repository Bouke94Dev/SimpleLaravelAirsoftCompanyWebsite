@extends("layouts.app")

@section("title", "Profile")

@section("body")
    <div class="min-h-screen flex items-center justify-center bg-white p-6">
        <div class="w-full max-w-2xl bg-white rounded-xl shadow-lg p-10 hover:shadow-xl transition">
            <h1 class="text-2xl font-bold text-center mb-8">Profile</h1>

            @if (session("success"))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session("success") }}
                </div>
            @endif

            <form action="{{ route("profile.update", $user->id) }}" method="POST" class="flex flex-col space-y-6">
                @csrf
                @method("PUT")
                <div>
                    <label for="firstname" class="block text-sm font-medium text-gray-700 mb-1">Firstname</label>
                    <input
                        type="text"
                        name="first_name"
                        id="first_name"
                        value="{{ $user->first_name }}"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                    />
                </div>

                <div>
                    <label for="lastname" class="block text-sm font-medium text-gray-700 mb-1">Lastname</label>
                    <input
                        type="text"
                        name="last_name"
                        id="last_name"
                        value="{{ $user->last_name }}"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                    />
                </div>

                <div>
                    <label for="postcode" class="block text-sm font-medium text-gray-700 mb-1">Postcode</label>
                    <input
                        type="text"
                        name="postcode"
                        id="postcode"
                        value="{{ $user->postcode }}"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                    />
                </div>
                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
                    <input
                        type="text"
                        name="city"
                        id="city"
                        value="{{ $user->city }}"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                    />
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                    <input
                        type="text"
                        name="phone"
                        id="phone"
                        value="{{ $user->phone }}"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                    />
                </div>
                <div>
                    <button
                        type="submit"
                        id="submitButton"
                        class="w-full bg-gray-800 text-white font-semibold py-2 rounded-lg hover:bg-black transition cursor-pointer"
                    >
                        Update
                    </button>
                </div>
            </form>
            <div class="mt-12">
                <h1 class="text-2xl font-bold text-center mb-8">Reservations</h1>
                <table class="w-full border-collapse rounded-lg overflow-hidden shadow-md bg-gray-50">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="border px-4 py-2 text-left">Site</th>
                            <th class="border px-4 py-2 text-left">PlayerAmount</th>
                            <th class="border px-4 py-2 text-left">Gear</th>
                            <th class="border px-4 py-2 text-left">Note</th>
                            <th class="border px-4 py-2 text-left">StartDate</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($user->reservations as $reservation)
                            <tr class="bg-white hover:bg-gray-100">
                                <td class="border px-4 py-2">{{ $reservation->site->name }}</td>
                                <td class="border px-4 py-2">{{ $reservation->player_amount }}</td>
                                <td class="border px-4 py-2">{{ $reservation->gear->gear }}</td>
                                <td class="border px-4 py-2">{{ $reservation->note }}</td>
                                <td class="border px-4 py-2">{{ $reservation->start_date }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center py-4 text-gray-500">Geen gegevens</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
