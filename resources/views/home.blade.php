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
            <main class="bg-red-500 min-h-[200vh]">
            </main>
        </body>
</html>
