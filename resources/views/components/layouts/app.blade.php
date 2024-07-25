<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>{{ $title ?? config('app.name') }}</title>
</head>

<body class="bg-base-200 min-h-screen">
    @auth
        <div class="drawer lg:drawer-open">
            <input id="drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <!-- Page content here -->
                <livewire:partial.navbar />
                {{ $slot }}
            </div>
            <div class="drawer-side">
                <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                <livewire:partial.sidebar />
            </div>
        </div>
    @endauth

    @guest
        <div class="flex flex-col justify-center items-center h-screen gap-8">
            <h1 class="font-bold text-4xl">{{ config('app.name') }}</h1>
            {{ $slot }}
        </div>
    @endguest
</body>

</html>
