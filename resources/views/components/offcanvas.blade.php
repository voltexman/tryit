@props(['id' => 'offcanvas', 'title' => '', 'position' => 'right'])

<div 
    x-data="{
        open: false,
        init() {
            // Зберігаємо посилання на цей компонент в глобальному об'єкті
            if (!window.offcanvasInstances) {
                window.offcanvasInstances = {};
            }
            window.offcanvasInstances['{{ $id }}'] = this;
        }
    }"
    x-init="init()"
    id="{{ $id }}"
    class="offcanvas-component">
    
    <!-- Фон зі скломинаєм -->
    <div 
        x-cloak
        x-show="open"
        @click="open = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black/50 z-40"
        style="display: none;">
    </div>

    <!-- Офканвас панель -->
    <div
        x-cloak
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="{{ $position === 'right' ? 'translate-x-full' : '-translate-x-full' }}"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="{{ $position === 'right' ? 'translate-x-full' : '-translate-x-full' }}"
        class="fixed top-0 {{ $position === 'right' ? 'right-0' : 'left-0' }} h-screen w-full max-w-2xl bg-white shadow-2xl z-50 overflow-y-auto"
        style="display: none;">
        
        <!-- Заголовок -->
        <div class="sticky top-0 z-30 bg-white border-b border-slate-200 px-6 py-5 flex items-center justify-between gap-4">
            @if($title)
                <h2 class="font-display text-2xl font-bold text-slate-900">{{ $title }}</h2>
            @endif
            <button 
                @click="open = false"
                type="button"
                class="ml-auto shrink-0 text-slate-500 hover:text-slate-700 transition-colors p-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Контент -->
        <div class="p-6">
            {{ $slot }}
        </div>
    </div>

    <!-- Тригер для відкривання (якщо переданий) -->
    @if(isset($trigger))
        <button 
            @click="open = true"
            type="button"
            {{ $trigger->attributes }}>
            {{ $trigger }}
        </button>
    @endif
</div>

<script>
    if (!window.openOffcanvas) {
        window.openOffcanvas = function(id) {
            if (window.offcanvasInstances && window.offcanvasInstances[id]) {
                window.offcanvasInstances[id].open = true;
            }
        };
    }

    if (!window.closeOffcanvas) {
        window.closeOffcanvas = function(id) {
            if (window.offcanvasInstances && window.offcanvasInstances[id]) {
                window.offcanvasInstances[id].open = false;
            }
        };
    }
</script>
