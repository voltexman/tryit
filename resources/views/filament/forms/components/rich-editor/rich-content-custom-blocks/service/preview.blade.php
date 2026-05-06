<div class="p-4 bg-emerald-700 rounded-2xl border border-emerald-600 shadow-sm overflow-hidden relative">

    <div class="grid grid-cols-2 gap-4 relative z-10">
        <div class="space-y-2">
            <h3 class="text-sm font-bold text-white leading-tight">
                {{ $title ?? 'Чистота без зусиль' }}
            </h3>
            <p class="text-[10px] text-emerald-100/70 line-clamp-2">
                {{ $subtitle ?? 'Ваш простір у надійних руках нашої команди.' }}
            </p>
            <div class="px-3 py-1.5 bg-white rounded-lg text-emerald-800 text-[9px] font-black uppercase w-fit">
                {{ $actionLabel ?? 'Замовити послугу' }}
            </div>
        </div>
    </div>

    {{-- Subtle background hint --}}
    <div class="absolute -bottom-4 -right-4 size-16 bg-white/5 rounded-full blur-xl"></div>
</div>
