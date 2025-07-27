@extends("layouts.app")

@section("title", "Register")

@section("body")
    <div class="min-h-screen flex items-center justify-center bg-white">
        <div class="w-full max-w-3xl min-h-[700px] bg-white rounded-xl shadow-lg p-12 hover:shadow-xl transition">
            <h1 class="text-2xl font-bold text-center mb-6">Register</h1>

            <form action="{{ route("register") }}" method="POST" class="flex flex-col space-y-6">
                @csrf

                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">Firstname</label>
                    <input
                        type="text"
                        name="first_name"
                        id="first_name"
                        value="{{ old("first_name") }}"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                    />
                    @error("first_name")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old("email") }}"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                    />
                    @error("email")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                    />
                    @error("password")
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                        Confirm Password
                    </label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        required
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-gray-800"
                    />
                </div>

                <div>
                    <button
                        type="submit"
                        class="w-full bg-gray-800 text-white font-semibold py-2 rounded-lg hover:bg-black transition cursor-pointer"
                    >
                        Register
                    </button>
                </div>
            </form>

            <p class="text-center text-sm text-gray-600 mt-4">
                Already have an account?
                <a href="{{ route("login") }}" class="text-gray-800 hover:underline">Login here</a>
            </p>

            @if (session("error"))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4" role="alert">
                    <span class="block sm:inline">{{ session("error") }}</span>
                </div>
            @endif
        </div>
    </div>
@endsection
