<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }} | Autho </title>

        {{-- Tailwind Link --}}
        @vite('resources/css/app.css')
    </head>
    <body>

        <div class="w-screen h-dvh bg-[#FFF1DB] font-poppine">

            {{-- Navbar --}}
            @livewire('component.navbar')

            {{ $slot }}

        </div>

        {{-- Iconify CDN --}}
        <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    </body>
</html>
