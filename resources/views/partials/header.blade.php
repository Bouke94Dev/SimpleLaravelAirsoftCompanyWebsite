<header
    x-data="{ open: false }"
    class="bg-gray-200 rounded-md rounded-br-none rounded-bl-none border-b-1 border-gray-400 shadow pb-4"
>
    <div class="max-w-7xl mx-auto flex">
        <!-- Logo -->
        <a href="{{ route("homepage") }}" class="flex items-center space-x-1">
            <span class="text-lg font-semibold text-gray-800">{{ __("messages.title") }}</span>
        </a>
        <div class="flex-grow hidden lg:block"></div>

        <!-- Desktop -->
        <div class="hidden lg:flex items-center space-x-4">
            <a href="#" class="text-gray-800 hover:text-black">Login</a>
            <a href="#" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-black">Register</a>
        </div>

        <!-- Mobile -->
        <button @click="open = !open" class="lg:hidden ml-auto">
            <svg class="w-6 h-6 text-gray-800" stroke="currentColor" viewBox="0 0 24 24">
                <path
                    :class="{'hidden': open, 'inline-flex': !open }"
                    class="inline-flex"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />
                <path
                    :class="{'inline-flex': open, 'hidden': !open }"
                    class="hidden"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        </button>
    </div>
    <div x-show="open" x-transition class="lg:hidden px-4 pb-4 border-gray-400">
        <nav class="flex flex-col space-y-2 text-gray-800">
            <a href="#" class="mt-2 hover:text-black">Login</a>
            <a href="#" class="mt-2 hover:text-black">Register</a>
        </nav>
    </div>
</header>
