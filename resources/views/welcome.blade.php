@extends('layouts.app')

@section('title', 'Test Alpine')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Test page</h1>

    <div x-data="{ open: false }" class="bg-white shadow-md rounded p-4">
        <button @click="open = !open" class="px-4 py-2 bg-blue-600 text-white rounded">
            Test
        </button>

        <div x-show="open" class="mt-4 p-4 bg-blue-100 rounded">
            Quick test too see alpine is up and running
        </div>
    </div>
@endsection
