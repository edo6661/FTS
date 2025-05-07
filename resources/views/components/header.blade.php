<header class="bg-primary-indigo">
    <x-header-mobile/>
   

    <div class="scroll-header ">
        <div class="bg-primary-blue py-2">
            <p class="text-center">
                Welcome to petech, 25 Years Of Experience In IT Consulting & Solutions
            </p>
        </div>
        <div class="flex bg-white items-center justify-around py-4">
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-full lg:h-12 h-8">
            </div>
            <div class="flex items-center justify-between lg:gap-8 gap-4">
                <x-header.nav-icon-content
                    key="Phone Number"
                    value="+1 234 567 890"
                >
                    <x-slot name="icon">
                        <x-phosphor-phone-list-bold class="w-6 h-6 text-white-500" />
                    </x-slot>
                </x-header.nav-icon-content>
                <x-header.nav-icon-content
                    key="Email"
                    value="email@gmail.com"
                >
                    <x-slot name="icon">
                        <x-fontisto-email class="w-6 h-6 text-white-500" />
                    </x-slot>
                </x-header.nav-icon-content>
                <x-header.nav-icon-content
                    key="Locations"
                    value="205 Main Street, USA"
                >
                    <x-slot name="icon">
                        <x-ik-location class="w-6 h-6 text-white-500" />
                    </x-slot>
                </x-header.nav-icon-content>
            </div>
        </div>
    </div>

    <nav class="bg-primary-indigo py-4 sticky-nav w-full z-50 md:block hidden">
        <div class="flex items-center justify-center lg:gap-16 gap-8">
            <ul class="items-center flex gap-4">
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
                    <li>
                        <a href="{{ $link }}" class="text-white font-nunito-sans text-lg hover:text-primary-blue transition-colors duration-300 ease-in-out font-extrabold">
                            {{ $name }}
                        </a>    
                    </li>
                @endforeach
            </ul>
            <div class="flex items-center gap-4">
                <flux:custom-button
                    
                >
                    GET STARTED
                </flux:custom-button>
              
                <div class="bg-primary-blue px-4 py-4 rounded-md">
                  <x-zondicon-search class="text-white w-4 h-4" />
                </div>
                @if(auth()->check())
                    <a href="{{ route('admin.dashboard') }}" class="text-white font-nunito-sans text-lg hover:text-primary-blue transition-colors duration-300 ease-in-out font-extrabold">
                        Dashboard
                    </a>
                @else
                    {{-- <a href="{{ route('login') }}" class="text-white font-nunito-sans text-lg hover:text-primary-blue transition-colors duration-300 ease-in-out font-extrabold">
                        Login
                    </a> --}}
                @endif
              </div>
              
        </div>
    </nav>
    
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const scrollHeader = document.querySelector('.scroll-header');
        const stickyNav = document.querySelector('.sticky-nav');
        let headerHeight = scrollHeader.offsetHeight;
        
        const scrollSensitivity = 50; 
        
        function updateHeaderPosition() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > scrollSensitivity) {
                scrollHeader.style.transform = 'translateY(-100%)';
                scrollHeader.style.display = 'none'; 
                stickyNav.classList.add('fixed', 'top-0');
                document.body.classList.add('nav-fixed');
                
                const mainContent = document.querySelector('main');
                if (mainContent) {
                    const navHeight = stickyNav.offsetHeight;
                    mainContent.style.marginTop = navHeight + 'px';
                }
            } else {
                scrollHeader.style.transform = 'translateY(0)';
                scrollHeader.style.display = 'block';
                stickyNav.classList.remove('fixed', 'top-0');
                document.body.classList.remove('nav-fixed');
                
                const mainContent = document.querySelector('main');
                if (mainContent) {
                    mainContent.style.marginTop = '0';
                }
            }
        }
        
        window.addEventListener('scroll', updateHeaderPosition);
        
        window.addEventListener('resize', function() {
            headerHeight = scrollHeader.offsetHeight;
            updateHeaderPosition();
        });
        
        updateHeaderPosition();
    });
</script>

<style>
    @media (width >= 48rem) {
        .scroll-header {
            display: block;
        }
    }
    @media (width <= 48rem) {
        .scroll-header {
            display: none !important;
        }
    }
    .scroll-header {
        transition: transform 0.3s ease;
        will-change: transform;
        transform-origin: top;
        overflow: hidden;
    }

    
    .sticky-nav {
        transition: all 0.3s ease;
        will-change: transform, box-shadow;
    }
    
    .sticky-nav.fixed {
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
</style>