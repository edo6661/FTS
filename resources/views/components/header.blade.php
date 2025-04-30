<header class="bg-primary-indigo">
    <div class="scroll-header">
        <div class="bg-primary-blue py-2">
            <p class="text-center">
                Welcome to petech, 25 Years Of Experience In IT Consulting & Solutions
            </p>
        </div>
        <div class="bg-white flex items-center justify-around py-4">
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="flex items-center justify-between gap-8">
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

    <nav class="bg-primary-indigo py-4 sticky-nav w-full z-50">
        <div class="flex items-center justify-center gap-16">
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
                <div class="relative inline-block group overflow-hidden rounded-md border-2 border-white bg-white">
                  <div class="absolute inset-0 bg-primary-blue transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out z-0"></div>
              
                  <div class="relative z-10 px-6 py-4 text-primary-blue group-hover:text-white transition-colors duration-500">
                    <a class="font-semibold">GET STARTED +</a>
                  </div>
                </div>
              
                <div class="bg-primary-blue px-4 py-4 rounded-md">
                  <x-zondicon-search class="text-white w-4 h-4" />
                </div>
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