<div>
    <x-shared.heading-subheading
        heading="Blogs"
        subheading="List of all blogs"
    />
    
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900 dark:text-gray-400 border-b">
                <tr>

                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created By
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created At
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                <tr class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ $blog->logo_url }}" alt="Blog Image" class="w-16 h-16 object-cover rounded-lg">
                    </th>
                    <td class="px-6 py-4">
                        {{ $blog->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $blog->description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $blog->users[0]->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $blog->created_at->format('d M Y') }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="space-x-2">
                            <flux:button variant="filled" icon="pencil" :href="route('admin.blogs.edit', $blog->id)"/>
                        
                            
                            <flux:button variant="danger" icon="trash" wire:click="delete({{ $blog->id }})"/>

                        </div>
                    </td>
                </tr>
               
                @endforeach
            
            </tbody>
        </table>
        <div class="px-6 py-4 dark:bg-zinc-900 bg-zinc-50">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
