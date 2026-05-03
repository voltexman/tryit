<div
    class="relative overflow-hidden -mx-5 md:rounded-4xl my-10 bg-[#2d6a4f] min-h-120 md:min-h-120 flex flex-col justify-end group">
    {{-- 1. Background Texture/Image --}}
    <div class="absolute inset-0 -top-10 z-0">
        <img src="{{ Vite::asset('resources/images/h3-cleaning-01.jpg') }}"
            class="size-full object-cover rounded-none! mix-blend-overlay" alt="">
        <div class="absolute inset-0 bg-[#2d6a4f]/85"></div>
    </div>

    {{-- 2. Team Image --}}
    <div class="absolute inset-x-0 -bottom-10 z-10 h-full flex justify-center items-end pointer-events-none">
        <img src="{{ Vite::asset('resources/images/h1-cleaning-team.png') }}"
            class="w-auto h-full max-h-full object-contain object-bottom! shadow-none!" alt="TryIt Team">
    </div>

    {{-- 3. Floating Content Card (Bottom Left) --}}
    <div class="relative max-w-lg w-fit z-20 p-5 text-center md:text-left">
        <div
            class="bg-[#fdfcf5] p-5 md:p-7.5 rounded-3xl shadow-2xl flex flex-col animate-in fade-in slide-in-from-bottom-10 duration-1000">

            {{-- Title --}}
            <div class="font-display text-xl md:text-2xl font-black text-slate-800 leading-tight">
                {{ $title ?? 'Ratings 4.5' }}
            </div>

            {{-- Subtitle --}}
            <div class="mt-2 text-slate-500 text-base md:text-base font-medium leading-relaxed">
                {{ $subtitle ?? 'Clients praise our exceptional work.' }}
            </div>

            {{-- Action Link --}}
            <div class="flex items-center mt-5 gap-2.5">
                <div
                    class="px-6 py-3.5 bg-[#2d6a4f] rounded-full w-fit text-white font-black text-xs uppercase tracking-wide flex items-center gap-2">
                    {{ $actionLabel ?? 'Детальніше' }}
                    <x-lucide-arrow-right class="size-4" stroke-width="3" />
                </div>
                <div
                    class="p-6 bg-[#2d6a4f] rounded-full w-fit text-white font-black text-xs uppercase tracking-wide flex items-center">
                    <x-lucide-phone-call class="size-4 shrink-0 stroke-white" stroke-width="3" />
                </div>
            </div>
        </div>
    </div>
</div>
