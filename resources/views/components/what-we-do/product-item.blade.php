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
    <div class="container-svg-what-we-do">
        {{ $image }}
    </div>
   <x-link-read-more :href="$link"/>
</div>

<style>
    .container-svg-what-we-do > svg {
        width: 4rem;
        height: 4rem;
        color: var(--primary-blue);
    }
</style>