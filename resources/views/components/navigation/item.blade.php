@props(['link' => '#'])

<a href="{{ $link }}" class="block">
    {{ $slot }}
</a>
