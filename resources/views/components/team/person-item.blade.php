@props(['name', 'position'])
<div class="flex items-center justify-center gap-4 flex-col">
    <img src="{{ asset('images/team-1.jpg') }}" alt="Team Member 1" class=" rounded-lg shadow-lg" />
    <div class="text-center">
        <h4 class="font-bold text-lg">
            {{ $name }}
        </h4>
        <p class="font-nunito-sans text-quaternary-gray">
            {{ $position }}
        </p>
    </div>
</div>