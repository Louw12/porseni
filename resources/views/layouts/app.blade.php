@php
    $manifestPath = public_path('build/manifest.json');
    $manifest = file_exists($manifestPath) ? json_decode(file_get_contents($manifestPath), true) : [];
    $cssEntry = $manifest['resources/css/app.css']['file'] ?? null;
    $jsEntry = $manifest['resources/js/app.js']['file'] ?? null;
@endphp

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    @if($cssEntry)
        <link rel="stylesheet" href="{{ asset('build/' . $cssEntry) }}">
    @endif
</head>
<body class="bg-gray-100 text-gray-900">
<div class="min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-2xl">
        @yield('content')
    </div>
</div>

@if($jsEntry)
    <script src="{{ asset('build/' . $jsEntry) }}" defer></script>
@endif
</body>
</html>