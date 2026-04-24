<div>
    {{-- Mobile Placeholder --}}
    <div class="md:hidden flex gap-4 overflow-x-auto pb-4 -mx-5 px-5">
        @foreach (range(1, 2) as $i)
            <div class="flex-none w-[75vw] flex flex-col bg-gray-100 rounded-2xl overflow-hidden animate-pulse">
                <div class="aspect-16/10 bg-gray-200"></div>
                <div class="p-4">
                    <div class="flex gap-3 mb-2">
                        <div class="h-3 w-20 bg-gray-200 rounded"></div>
                        <div class="h-3 w-10 bg-gray-200 rounded"></div>
                    </div>
                    <div class="h-4 w-full bg-gray-200 rounded mb-2"></div>
                    <div class="h-4 w-2/3 bg-gray-200 rounded mb-4"></div>
                    <div class="h-3 w-16 bg-gray-200 rounded"></div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Desktop Placeholder --}}
    <div class="hidden md:grid md:grid-cols-3 gap-6">
        @foreach (range(1, 3) as $i)
            <div class="flex flex-col bg-gray-100 rounded-2xl overflow-hidden animate-pulse">
                <div class="aspect-16/10 bg-gray-200"></div>
                <div class="p-5">
                    <div class="flex gap-3 mb-3">
                        <div class="h-3 w-24 bg-gray-200 rounded"></div>
                        <div class="h-3 w-12 bg-gray-200 rounded"></div>
                    </div>
                    <div class="h-5 w-full bg-gray-200 rounded mb-2"></div>
                    <div class="h-5 w-3/4 bg-gray-200 rounded mb-3"></div>
                    <div class="h-4 w-full bg-gray-200 rounded mb-1"></div>
                    <div class="h-4 w-2/3 bg-gray-200 rounded mb-4"></div>
                    <div class="h-3 w-20 bg-gray-200 rounded"></div>
                </div>
            </div>
        @endforeach
    </div>
</div>
