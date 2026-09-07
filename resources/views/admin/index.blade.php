@extends('layouts.app')

@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold">Admin Dashboard</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="px-3 py-2 bg-gray-800 text-white rounded">Logout</button>
            </form>
        </div>

        <p class="mt-4 text-gray-700">Selamat datang, {{ auth()->user()->name }}. Anda adalah admin.</p>

        <section class="mt-6">
            <h2 class="text-lg font-medium">Site Management</h2>
            <ul class="list-disc pl-5 mt-2">
                <li><a href="#" class="text-indigo-600">Manage Users</a></li>
                <li><a href="#" class="text-indigo-600">Site Settings</a></li>
            </ul>
        </section>
    </div>
@endsection