@props([
    'img',
    'date',
    'title',
    'description',
    'link' => '#',
])
<div class="flex flex-col gap-6 bg-quinary-gray pb-6 rounded-lg">
    <div>
        <img src="{{ $img }}" alt="Blog 1" class="w-full h-auto rounded-t-lg object-cover"/>
    </div>
    <div class="text-start space-y-4 px-4">
        <div class="flex gap-2">
            <x-zondicon-calendar class="w-4 h-4 text-primary-blue"/>
            <p class="text-tertiary-gray font-medium">
                {{ $date }}
            </p>
        </div>
        <h3 class="font-semibold md:text-3xl text-2xl">
            {{ $title }}
        </h3>
        <p class="font-nunito-sans text-tertiary-gray">
            {{ $description }}
        </p>
        <x-link-read-more href="{{ $link }}" class="text-white"/>
    </div>
</div>