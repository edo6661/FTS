
<section id="blog" class="flex flex-col py-8 text-center space-y-4 px-4 ">
    <p class="font-semibold text-lg">
        Our latest Blog
    </p>
    <div>
        <h3 class="md:text-4xl lg:text-6xl sm:text-3xl text-xl font-bold">
            Our Recent Article
        </h3>
        <h3 class="md:text-4xl lg:text-6xl sm:text-3xl text-xl font-bold">
            News & Tips
        </h3>
    </div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 mt-12">
        @php
            $blogPosts = [
                ['img' => 'images/blog-1.jpg', 'date' => '30 DEC 2024', 'title' => 'Smash Podcast Episode With Paul Boag', 'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem petech doloremque laudantium totam rem aperiam'],
                ['img' => 'images/blog-1.jpg', 'date' => '30 DEC 2024', 'title' => 'Smash Podcast Episode With Paul Boag', 'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem petech doloremque laudantium totam rem aperiam'],
                ['img' => 'images/blog-1.jpg', 'date' => '30 DEC 2024', 'title' => 'Smash Podcast Episode With Paul Boag', 'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem petech doloremque laudantium totam rem aperiam'],
            ];
        @endphp
        @foreach ($blogs as $blog)
            <x-blog.item 
                :blog="$blog"
            />
        @endforeach
        
    </div>
</section>

<style>
    #blog {
        background: url("{{ asset('images/blog.jpg') }}") no-repeat center center/cover;
    }
</style>