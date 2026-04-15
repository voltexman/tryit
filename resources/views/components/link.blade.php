@props(['href' => '#'])

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => 'text-tryit-dark hover:text-tryit-green transition-color duration-300']) }}>
    {{ $slot }}
</a>
