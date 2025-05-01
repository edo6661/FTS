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
<div class="bg-primary-blue py-4 md:hidden flex items-center justify-between px-4 h-[72px]">
    <h1 class="text-xl font-bold">
        petech
    </h1>
    <button class="nav-toggle">
        <x-css-menu class="w-6 h-6" />


    </button>
</div>
<div class="nav-menu bg-white block md:hidden  text-black">
    <div class="menu-content">
        @foreach ($navItems as $name => $link)
            <a href="{{ $link }}" class="text-black font-nunito-sans text-lg hover:text-primary-blue transition-colors duration-300 ease-in-out font-semibold px-4 py-4 border-tertiary-gray border-t">
                {{ $name }}
            </a>
        @endforeach
    </div>
</div>

<style>
@media (width <= 48rem) {
  .nav-toggle {
    display: block;
  }
  
  .nav-menu {
    position: absolute;
    width: 100%;
    left: 0;
    top: 72px; 
    overflow: hidden;
    max-height: 0;
    transition: max-height 0.3s ease-in-out;
    z-index: 50;
  }
  
  .menu-content {
    display: flex;
    flex-direction: column;
  }
  
  .nav-menu.active {
    max-height: 500px;
    transition: max-height 0.5s ease-in-out;
  }
}

</style>

