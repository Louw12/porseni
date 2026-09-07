@extends('layouts.app')

@section('content')
    <div class="bg-white shadow rounded-lg p-6">
        <h1 class="text-2xl font-semibold">Dashboard</h1>
        <p class="text-gray-700 mt-2">Welcome, {{ auth()->user()->name }} <span class="text-sm text-gray-500">(role: {{ auth()->user()->role }})</span></p>

        <div class="mt-4">
            @if(auth()->user()->role === 'admin')
                <a href="{{ route('admin') }}" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded">Go to Admin Page</a>
            @endif
        </div>

        <form method="POST" action="{{ route('logout') }}" class="mt-6">
            @csrf
            <button class="px-4 py-2 rounded bg-gray-200 hover:bg-gray-300">Logout</button>
        </form>
    </div>
@endsection