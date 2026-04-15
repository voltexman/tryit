@props(['defaultValue', 'details', 'list'])

<section x-data="{
    active: '{{ $defaultValue }}',
    background: '{{ App\Enums\ServiceEnum::from($defaultValue)->image() }}',
}" class="relative py-20 px-5 lg:px-0 overflow-hidden bg-black">

    <!-- Background image -->
    <img x-bind:src="background" class="absolute inset-0 w-full h-full object-cover z-0" x-transition.opacity />

    <!-- Black overlay -->
    <div class="absolute inset-0 bg-black/60 pointer-events-none z-10"></div>

    <div class="grid lg:grid-cols-3 gap-20 max-w-6xl mx-auto relative z-20">

        <!-- DESKTOP LEFT TEXT BLOCK -->
        <div class="hidden lg:flex flex-col justify-center lg:col-span-2 relative order-2 lg:order-1">
            <div class="relative min-h-[200px]">
                @foreach (App\Enums\ServiceEnum::cases() as $service)
                    <div x-show="active === '{{ $service->value }}'" x-transition:enter="transition ease-out duration-400"
                        x-transition:enter-start="opacity-0 translate-y-3"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-3" class="absolute inset-0">
                        <x-service.details value="{{ $service->value }}">
                            {{ $service->description() }}
                        </x-service.details>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- RIGHT SIDEBAR ITEMS + MOBILE ACCORDION -->
        <div class="flex flex-col gap-2.5 order-1 lg:order-2 w-full">
            @foreach (App\Enums\ServiceEnum::cases() as $service)
                <!-- Desktop button + Mobile accordion header -->
                <x-service.item value="{{ $service->value }}" />

                <!-- MOBILE ACCORDION CONTENT -->
                <div class="lg:hidden" x-show="active === '{{ $service->value }}'" x-collapse>
                    <x-service.details value="{{ $service->value }}">
                        {{ $service->description() }}
                    </x-service.details>
                </div>
            @endforeach
        </div>
    </div>
</section>
