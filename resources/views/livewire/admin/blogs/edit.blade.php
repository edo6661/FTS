<div>
    <x-shared.heading-subheading
        heading="Blog"
        subheading="Edit blog"
    />
    <form wire:submit="edit"
        enctype="multipart/form-data"
        class="space-y-4"
    >
        <flux:input label="Title" wire:model.live="blog.title" :invalid="$errors->has('blog.title')" type="text"/>
        <flux:input label="Description" wire:model.live="blog.description" :invalid="$errors->has('blog.description')" type="text"/>
            <flux:input label="Image" wire:model.live="image" :invalid="$errors->has('image')" type="file"/>
            @if ($image)
            <img src="{{ $image->temporaryUrl() }}" alt="Blog Image" class="w-16 h-16 object-cover rounded-lg">
            @elseif ($blog->image)
            <img src="{{ $blog->logo_url }}" alt="Blog Image" class="w-24 h-24 object-cover rounded-lg">
            @endif
        <flux:button wire:loading.attr="disabled" wire:target="image" type="submit">
            <span wire:loading.remove wire:target="image">
                Edit
           </span>
        </flux:button>
    </form>
</div>
