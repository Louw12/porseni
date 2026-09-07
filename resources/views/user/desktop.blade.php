@extends('layouts.app')

@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold">User Dashboard (Desktop)</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="px-3 py-2 bg-gray-800 text-white rounded">Logout</button>
            </form>
        </div>

        <div class="mt-4 bg-gray-50 p-4 rounded">
            <h2 class="text-lg font-medium">Welcome, {{ auth()->user()->name }}</h2>
            <p class="text-sm text-gray-600">Your role: {{ auth()->user()->role }}</p>
        </div>

        <div class="mt-4">
            <h3 class="font-medium">Content</h3>
            <p class="text-gray-600">This is the desktop view for users.</p>
        </div>
    </div>
@endsection