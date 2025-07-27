@extends("layouts.app")

@section("title", "Profile")

@section("body")
    <div class="min-h-screen flex items-center justify-center bg-white p-6">
        <div class="w-full max-w-2xl bg-white rounded-xl shadow-lg p-10 hover:shadow-xl transition">
            <h1 class="text-2xl font-bold text-center mb-8">Book reservation</h1>

            @if (session("success"))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session("success") }}
                </div>
            @endif

            <form action="{{ route("reservation.store") }}" method="POST" class="flex flex-col space-y-6">
                @csrf
                <div>
                    <label for="site_id" class="block text-sm font-medium text-gray-700 mb-1">Site</label>
                    <select
                        name="site_id"
                        id="site_id"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2"
                    >
                        <option value="">Select a site</option>
                        @foreach ($sites as $site)
                            <option value="{{ $site->id }}">{{ $site->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="start_date" class="block text-sm font-medium text-gray-700 mb-1">
                        Start Date and Time
                    </label>
                    <input
                        type="datetime-local"
                        name="start_date"
                        id="start_date"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2"
                    />
                </div>
                <div>
                    <label for="gear_id" class="block text-sm font-medium text-gray-700 mb-1">Gear</label>
                    <select
                        name="gear_id"
                        id="gear_id"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2"
                    >
                        <option value="">Select gear</option>
                        @foreach ($gears as $gear)
                            <option value="{{ $gear->id }}">{{ $gear->gear }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="player_amount" class="block text-sm font-medium text-gray-700 mb-1">Players</label>
                    <input
                        type="number"
                        name="player_amount"
                        id="player_amount"
                        min="1"
                        max="20"
                        value="1"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                    />
                </div>

                <div>
                    <label for="note" class="block text-sm font-medium text-gray-700 mb-1">Note</label>
                    <textarea
                        name="note"
                        id="note"
                        rows="5"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                        placeholder="Please let us know if you need something"
                    ></textarea>
                </div>

                <div>
                    <button
                        type="submit"
                        id="submitButton"
                        class="w-full bg-gray-800 text-white font-semibold py-2 rounded-lg hover:bg-black transition cursor-pointer"
                    >
                        Book now
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
