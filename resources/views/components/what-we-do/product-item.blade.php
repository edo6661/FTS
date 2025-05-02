@props([
    'title' => null,
    'description' => null,
    'image' => null,
    'link' => null,
    
])
<div class="flex items-center justify-center flex-col text-center gap-6 px-8 py-12 bg-white rounded-md shadow-sm shadow-muted-foreground">
    <h4 class="text-black text-xl font-semibold">
        {{ $title }}
    </h4>
    <p class="font-nunito-sans text-primary-gray ">
        {{ $description }}
    </p>
    <div>
        <img src="{{ $image }}" alt="Super Technoloy" class="w-28 object-cover"/>
    </div>
    <a class="font-medium text-primary-gray" href="{{ $link }}">
        READ MORE <span class="text-primary-blue">+</span>
    </a>
</div>