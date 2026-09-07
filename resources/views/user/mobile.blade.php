@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow p-4 max-w-md mx-auto">
        <div class="flex items-center justify-between">
            <strong class="text-lg">User (Mobile)</strong>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-indigo-600">Logout</button>
            </form>
        </div>

        <div class="mt-4">
            <div class="bg-gray-50 rounded p-3">
                <h3 class="font-medium">Hello, {{ auth()->user()->name }}</h3>
                <p class="text-sm text-gray-600">Role: {{ auth()->user()->role }}</p>
            </div>

            <div class="mt-3 bg-white rounded p-3 shadow-sm">
                <h4 class="font-medium">Feed</h4>
                <p class="text-sm text-gray-600">Some mobile-optimized content here.</p>
            </div>
        </div>

    </div>

    <nav class="fixed inset-x-0 bottom-4 flex justify-around max-w-md mx-auto px-4">
        <a class="flex flex-col items-center text-sm text-indigo-600" href="#home">
            <svg class="w-6 h-6 mb-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 11.5L12 4l9 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span>Home</span>
        </a>
        <a class="flex flex-col items-center text-sm text-gray-500" href="#search">
            <svg class="w-6 h-6 mb-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="1.5"/><path d="M21 21l-4.35-4.35" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span>Search</span>
        </a>
        <a class="flex flex-col items-center text-sm text-gray-500" href="#profile">
            <svg class="w-6 h-6 mb-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="1.5"/></svg>
            <span>Profile</span>
        </a>
    </nav>
@endsection