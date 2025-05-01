@props([
    'title',
    'description'
])
<div class="space-y-2">
    <h4 class="font-semibold text-lg">
        {{ $title }}
    </h4>
    <p class="text-primary-gray font-nunito-sans">
        {{ $description }}
    </p>
</div>
