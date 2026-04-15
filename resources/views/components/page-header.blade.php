@props(['image'])

<div class="bg-[url({{ $image }})] bg-cover bg-bottom h-100" style="background-image: url('{{ asset($image) }}')">
    <div class="flex flex-col items-center justify-center size-full backdrop-blurxs bg-neutral-950/60 px-5 lg:px-0">
        <h1 class="font-[Oswald] text-xl lg:text-3xl text-white text-center font-semibold uppercase trackingwide">
            {{ $title }}
        </h1>
        @isset($description)
            <span class="text-gray-200 text-center w-full lg:max-w-md mt-5">
                {{ $description }}
            </span>
        @endisset

        @isset($breadcrumbs)
            <div class="mt-10">
                {{ $breadcrumbs }}
            </div>
        @endisset
    </div>
</div>
