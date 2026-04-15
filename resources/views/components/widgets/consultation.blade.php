@props(['service'])

<div
    {{ $attributes->class('lg:sticky lg:top-10 w-full h-120 bg-linear-to-b from-tryit-green-900 to-tryit-green rounded-3xl relative overflow-hidden consultation') }}>
    <div class="flex flex-col gap-y-2.5 p-5 lg:p-10 relative z-10">
        <div class="flex flex-col">
            <span class="font-bold text-xl font-[Oswald] text-white title">
                Консультація та замовлення
            </span>
            <span class="text-white text-3xl font-[Oswald] -tracking-wide font-bold phone">
                +380 (97) 877-866-7
            </span>
            <span class="font-medium text-white email">info@tryit.com.ua</span>

            <livewire:orders.service-page-order :page="$service" />
        </div>
    </div>
    <img src="{{ Vite::asset('resources/images/sidebar-service.png') }}"
        class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[90%] thumbs-up" alt="">
</div>
