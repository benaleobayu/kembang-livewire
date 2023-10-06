<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app_name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.style')
    @livewireStyles
</head>

<body>
    <x-layouts.header />
    <div class="container-fluid pb-3 flex-grow-1 d-flex flex-column flex-sm-row overflow-auto">
        <div class="row flex-grow-sm-1 flex-grow-0">
            <x-layouts.sidebar />
            <main class="col overflow-auto h-100">
                <div class="bg-light border rounded-3 p-3">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>


    @livewireScripts
</body>

</html>
