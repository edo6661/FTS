<footer class="pb-8 px-4 text-black space-y-8">
    <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8 justify-evenly">
        <div class="space-y-4">
            <h4 class="font-semibold text-xl">
                Join Newsletters
            </h4>
            <p class="text-primary-gray font-nunito-sans">
                Bed perspiciatis unde omnis iste natus error voluptatem accusantium oloremque laudantie totam rem aperiam
            </p>
            <div class="flex items-center">
                <input
                    class="bg-secondary-gray text-senary-gray rounded-l-md px-4 py-2 w-full"
                    placeholder="Your email"
                />
                <button class="bg-primary-blue text-white rounded-r-md px-4 py-2">
                    <x-heroicon-o-arrow-long-right class="w-6 h-6 text-white" />
                </button>
            </div>
        </div>
        <div class="space-y-4">
            <h4 class="font-semibold text-xl">
                Quick Links
            </h4>
            <div class="flex flex-col gap-2">
                @php
                    $navItems = [
                        'Home' => '/',
                        'Company' => '/company',
                        'Services' => '/services',
                        'Projects' => '/projects',
                        'Blog' => '/blog',
                        'Contact' => '/contact',
                    ]; 
                @endphp
                @foreach ($navItems as $name => $link)
                    <a href="{{ $link }}" class="text-primary-gray hover:text-primary-blue transition-colors duration-300 ease-in-out font-medium font-nunito-sans">
                        {{ $name }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="space-y-4">
            <h4 class="font-semibold text-xl">
                Contact Us
            </h4>
            <div class="space-y-2">
                <div class="flex gap-1">
                    <x-phosphor-phone-list-bold class="w-6 h-6 text-primary-blue" />
                    <p class="text-primary-gray font-nunito-sans">
                        +1 234 567 890
                    </p>
                </div>
                <div class="flex gap-1">
                    <x-phosphor-phone-list-bold class="w-6 h-6 text-primary-blue" />
                    <p class="text-primary-gray font-nunito-sans">
                        +1 234 567 890
                    </p>
                </div>
            </div>
        </div>
        <div class="space-y-4">
            <h4 class="font-semibold text-xl">
                Follow Us
            </h4>
            <div>
                <p class="text-primary-gray font-nunito-sans max-w-[240px]">
                    Bed ut perspiciatis unde omnis iste natus error doloremque lauda
                </p>
                
            </div>
        </div>
    </div>
    <hr/>
    <p class="text-primary-gray font-nunito-sans">
        @copy 2024. petech.All Right Reserved
    </p>

</footer>