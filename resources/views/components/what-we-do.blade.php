@php
$products = [
    [
        'title' => 'Super Technology',
        'description' => 'Perspiciatis unde omnis iste natu error sit voluptatem accusantium doloremque laudantium totam rem aperiam',
        'image' => asset('images/blue-circle.png'),
        'link' => '#'
    ],
    [
        'title' => 'Super Technology',
        'description' => 'Perspiciatis unde omnis iste natu error sit voluptatem accusantium doloremque laudantium totam rem aperiam',
        'image' => asset('images/blue-circle.png'),
        'link' => '#'
    ],
    [
        'title' => 'Super Technology',
        'description' => 'Perspiciatis unde omnis iste natu error sit voluptatem accusantium doloremque laudantium totam rem aperiam',
        'image' => asset('images/blue-circle.png'),
        'link' => '#'
    ]
];
@endphp 
<section id="what-we-do" class="relative px-4 ">
    <div class="absolute inset-0">
        <img src="{{ asset("images/what-we-do-bg.jpg") }}" alt="What We Do" class="w-full object-cover h-auto" />
    </div>
    <div class="absolute top-24 right-0 top-bottom hidden lg:block">
        <img src="{{ asset("images/blue-circle.png") }}" alt="Blue Circle" />
    </div>
    <div class="z-10 relative text-black py-16 space-y-12">
        <div class="flex flex-col items-center justify-center text-center gap-4">
            <p class="text-lg font-semibold text-primary-blue">
                WHAT WE DO
            </p>
            <div class="space-y-2">
                <h3 class="text-4xl font-bold">
                    Discover Best Product 
                </h3>
                <h3 class="text-4xl font-bold">
                    Design Strategy
                </h3>
            </div>
        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
            @foreach ($products as $product)
                <x-what-we-do.product-item
                    :title="$product['title']"
                    :description="$product['description']"
                    :image="$product['image']"
                    :link="$product['link']"
                />
            @endforeach
            
        </div>
    </div>
</section>
