
@props([
    'variant' => 'primary',
])

@php
$containerClasses = Flux::classes()
    ->add('relative group cursor-pointer overflow-hidden rounded-md border-2')
    ->add(match($variant) {
        'primary' => 'border-white bg-white',
        'secondary' => 'border-primary-blue bg-primary-blue',
        'tertiary' => 'border-primary-blue bg-primary-blue',
        
    });
$classes = Flux::classes()
    ->add('absolute inset-0 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-in-out z-0')
    ->add(match($variant) {
        'primary' => 'bg-primary-blue',
        'secondary' => 'bg-white',
        'tertiary' => 'bg-black',
    });
$textClasses = Flux::classes()
    ->add('relative z-10  md:px-6 md:py-4 px-4 py-2 transition-colors duration-500')
    ->add(match($variant) {
        'primary' => 'text-primary-blue group-hover:text-white',
        'secondary' => 'group-hover:text-black text-white',
        'tertiary' => 'text-white',
    });
@endphp
<div {{ $attributes->merge(['class' => $containerClasses]) }}>
  <div class="{{ $classes }}"></div>

  <div class="{{ $textClasses }}">
    <a class="font-semibold">
      {{ $slot }}
    </a>
  </div>
</div>

