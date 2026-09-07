@props(['type' => 'primary', 'text' => 'Button'])

@php
    $classes = match($type) {
        'primary' => 'inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-700',
        'secondary' => 'inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-gray-900 hover:bg-gray-300',
        default => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-white',
    };
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>{{ $text }}</button>