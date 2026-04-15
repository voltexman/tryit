@props(['sidebar' => null, 'orientation' => null, 'background' => null])

<section @if ($background) style="--section-bg: url('{{ $background }}');" @endif
    {{ $attributes->class([
        'relative py-20 px-5 md:px-20 xl:px-0 z-0',
        "before:absolute before:inset-0 before:z-[1] before:bg-[image:var(--section-bg)] before:bg-cover before:bg-center before:grayscale before:opacity-25 before:content-[''] after:absolute after:inset-0 after:z-[1] after:bg-white/15 after:content-['']" => $background,
    ]) }}>
    <div class="relative max-w-6xl mx-auto z-20">
        @isset($sidebar)
            <div class="grid lg:grid-cols-3 gap-10">

                {{-- SIDEBAR --}}
                <div
                    {{ $sidebar->attributes->class([
                        'order-2 lg:col-span-1',
                        'lg:order-1' => $orientation === 'left',
                        'lg:order-2' => $orientation === 'right',
                    ]) }}>
                    {{ $sidebar }}
                </div>

                {{-- CONTENT --}}
                <div @class([
                    'order-1 lg:col-span-2',
                    'lg:order-2' => $orientation === 'left',
                    'lg:order-1' => $orientation === 'right',
                ])>
                    {{ $slot }}
                </div>
            </div>
        @else
            <div>
                {{ $slot }}
            </div>
        @endisset
    </div>
</section>
