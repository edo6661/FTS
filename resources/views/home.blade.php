<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @php
            $title = 'Home';
        @endphp
       @include('partials.head', compact('title'))
    </head>
        <body >
            <x-header/>
            <main class="min-h-[200vh]">
                <x-hero/>
            </main>
        </body>
</html>
