<section id="about" class="grid md:grid-cols-2 md:gap-16 gap-8 px-4 ">
    <div class="container-left-about relative">
        <div class="container-about-image">
            <img src="{{ asset('images/about.png') }}"/>
        </div>
        <div class="container-about-shape-2 absolute bottom-0 left-4 -z-10 animate-pulse rotate">
            <img src="{{ asset('images/shape-about-2.png') }}"/>
        </div>
        <div class="container-about-shape absolute right-0 top-0 -z-10 animate-pulse top-bottom">
            <img src="{{ asset('images/shape-about.png') }}"/>
        </div>
    </div>
    <div class="container-right-about text-black space-y-6">
        <p class="text-primary-blue font-bold text-lg">
            ABOUT COMPANY
        </p>
        <div class="space-y-4">
            <h3 class="font-bold md:text-4xl text-3xl">
                We Discover About 45 Years About IT
            </h3>
            <p class="text-primary-gray font-nunito-sans">
                Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque udantium totam rem aperiam eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo
            </p>
        </div>
        <div class="space-y-4">
            <x-about.title-description
                title="Company Experience"
                description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan"
            />
            <x-about.title-description
                title="Company Experience"
                description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan"
            />
        </div>
        <flux:custom-button variant="tertiary" class="w-fit">
            GET STARTED +
        </flux:custom-button>
    </div>
</section>
