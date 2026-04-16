@extends('layouts.base')

@section('header')
    <div class="bg-cover bg-center h-dvh" style="background-image: url('{{ Vite::asset('resources/images/header.webp') }}');">
        <div class="flex items-center justify-center size-full bg-black/65">
            <div class="max-w-4xl mx-auto flex flex-col items-center gap-y-8 px-5 text-center">
                <h1
                    class="font-display text-3xl md:text-6xl xl:text-7xl text-nowrap uppercase text-white font-black tracking-wide leading-tight drop-shadow-lg animate-in duration-700">
                    <span class="text-tryit-orange">Чистота</span>, яку варто<br>
                    спробувати <span class="text-tryit-orange">сьогодні</span>
                </h1>

                <div class="w-16 h-0.5 bg-tryit-orange/80 rounded-full"></div>

                <p class="text-white/80 text-lg md:text-xl xl:text-2xl font-light max-w-xl text-balance">
                    Шукаєте надійну клінінгову компанію?<br class="hidden md:block">
                    Ми подбаємо про чистоту вашого офісу, виробництва чи будинку на найвищому рівні
                </p>

                <a href="#services" class="relative inline-block group mt-4 animate-in duration-1000">
                    <button
                        class="bg-tryit-orange font-display relative py-4 px-10 uppercase text-white text-base tracking-widest rounded-full border border-white/20 hover:border-tryit-orange/50 hover:bg-tryit-orange/50 backdrop-blur-sm transition-all duration-300 cursor-pointer"
                        aria-label="Перейти до розділу з нашими послугами">
                        Наші послуги
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{-- === ADVANTAGES STRIP === --}}
    <section class="py-20 bg-white" id="top">
        <div class="max-w-6xl mx-auto px-5">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-6">
                <div class="flex flex-col items-center text-center gap-3 animate-in duration-700"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="size-14 rounded-2xl bg-tryit-green/10 flex items-center justify-center">
                        <x-lucide-shield-check class="size-7 text-tryit-green" stroke-width="1.5" />
                    </div>
                    <span class="font-display text-sm font-semibold text-gray-800 uppercase tracking-wide">Гарантія
                        якості</span>
                    <span class="text-sm text-gray-500 leading-relaxed">Відповідальний підхід до кожного замовлення</span>
                </div>
                <div class="flex flex-col items-center text-center gap-3 animate-in duration-700"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="size-14 rounded-2xl bg-tryit-orange/10 flex items-center justify-center">
                        <x-lucide-leaf class="size-7 text-tryit-orange" stroke-width="1.5" />
                    </div>
                    <span class="font-display text-sm font-semibold text-gray-800 uppercase tracking-wide">Еко засоби</span>
                    <span class="text-sm text-gray-500 leading-relaxed">Безпечні для людей, тварин та довкілля</span>
                </div>
                <div class="flex flex-col items-center text-center gap-3 animate-in duration-700"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="size-14 rounded-2xl bg-tryit-green/10 flex items-center justify-center">
                        <x-lucide-clock class="size-7 text-tryit-green" stroke-width="1.5" />
                    </div>
                    <span class="font-display text-sm font-semibold text-gray-800 uppercase tracking-wide">Точно в
                        строк</span>
                    <span class="text-sm text-gray-500 leading-relaxed">Завжди вчасно та без затримок</span>
                </div>
                <div class="flex flex-col items-center text-center gap-3 animate-in duration-700"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="size-14 rounded-2xl bg-tryit-orange/10 flex items-center justify-center">
                        <x-lucide-sparkles class="size-7 text-tryit-orange" stroke-width="1.5" />
                    </div>
                    <span class="font-display text-sm font-semibold text-gray-800 uppercase tracking-wide">Сучасні
                        методи</span>
                    <span class="text-sm text-gray-500 leading-relaxed">Професійне обладнання та технології</span>
                </div>
            </div>
        </div>
    </section>

    {{-- === SERVICES GRID === --}}
    <section class="py-20 bg-gray-50" id="services">
        <div class="max-w-6xl mx-auto px-5">
            <div class="text-center mb-16 animate-in duration-700" x-intersect="$el.classList.add('zoom-in')">
                <span class="font-display text-sm font-medium text-gray-500">Що ми пропонуємо</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-1.5"><span
                        class="text-tryit-orange">Наші</span> послуги</h2>
                <div class="w-12 h-0.5 bg-tryit-green mx-auto mt-4 rounded-full"></div>
            </div>

            {{-- Service 1 — FEATURED --}}
            <a href="{{ route('services.myttia-fasadu-ta-vikon-na-vysoti') }}"
                class="group relative block rounded-2xl overflow-hidden mb-6 shadow-sm hover:shadow-2xl transition-all duration-500 animate-in duration-700">
                <div class="relative aspect-21/9 md:aspect-9/4 overflow-hidden">
                    <img src="{{ Vite::asset('resources/images/service-1.jpg') }}" alt="Миття фасадів та вікон на висоті"
                        class="size-full object-cover group-hover:scale-105 transition-transform duration-1000"
                        loading="lazy" />
                    <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/30 to-transparent"></div>
                    <div class="absolute inset-0 flex flex-col justify-end p-6 md:p-10 lg:p-14">
                        <div class="max-w-2xl">
                            <span
                                class="inline-flex items-center gap-2 bg-tryit-orange/90 text-white text-xs font-bold uppercase tracking-widest px-3.5 py-1.5 rounded-full mb-4">
                                <x-lucide-star class="size-3.5" stroke-width="2.5" />
                                Основна послуга
                            </span>
                            <h3
                                class="font-display text-2xl md:text-3xl lg:text-4xl font-bold text-white leading-tight mb-3 group-hover:translate-x-2 transition-transform duration-500">
                                Миття фасадів та вікон на висоті
                            </h3>
                            <p class="text-white/75 text-sm md:text-base leading-relaxed mb-4 max-w-xl">
                                Забезпечимо ідеальну чистоту вікон та фасадів за допомогою сучасної WFP-системи.
                                Професійні промислові альпіністи — безпечно, без розводів і слідів.
                            </p>
                            <div
                                class="inline-flex items-center gap-2 text-white font-semibold text-sm border border-white/25 rounded-full px-5 py-2.5 group-hover:bg-white/15 group-hover:border-white/40 transition-all duration-300">
                                <span>Дізнатись більше</span>
                                <x-lucide-arrow-right
                                    class="size-4 group-hover:translate-x-1 transition-transform duration-300"
                                    stroke-width="2" />
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            {{-- ===== MOBILE: Horizontal scroll carousel ===== --}}
            <div class="md:hidden" x-data="{
                current: 0,
                total: 6,
                scroll(el) {
                    const card = el.querySelector('.snap-center');
                    if (!card) return;
                    const cardWidth = card.offsetWidth + 12;
                    this.current = Math.round(el.scrollLeft / cardWidth);
                }
            }">
                <div class="flex gap-3 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-4 -mx-5 px-5" x-ref="track"
                    @scroll.throttle.100ms="scroll($el)"
                    style="scrollbar-width: none; -ms-overflow-style: none; -webkit-overflow-scrolling: touch;">

                    {{-- Card 1 --}}
                    <a href="{{ route('services.myika-ta-ochyshchennia-soniachnykh-panelei') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-2.jpg') }}" alt="Мийка сонячних панелей"
                                class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-green/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-sun class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">Мийка сонячних
                                    панелей</h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">Видаляємо пил, бруд і наліт,
                                    щоб ваші батареї працювали на повну потужність.</p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Card 2 --}}
                    <a href="{{ route('services.pisliabudivelne-prybyrannia') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-3.jpg') }}" alt="Післябудівельне прибирання"
                                class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-orange/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-hard-hat class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">Післябудівельне
                                    прибирання</h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">Швидко та якісно приберемо
                                    будівельне сміття, пил та бруд після ремонту.</p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Card 3 --}}
                    <a href="{{ route('services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-4.jpg') }}"
                                alt="Генеральне прибирання цехів" class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-green/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-factory class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">Генеральне
                                    прибирання цехів</h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">Комплексне прибирання цехів,
                                    складів та виробничих приміщень для безпеки та порядку.</p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Card 4 --}}
                    <a href="{{ route('services.khimchystka') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-5.jpg') }}" alt="Хімчистка"
                                class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-orange/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-spray-can class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">Хімчистка</h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">Глибоке очищення меблів,
                                    килимів та текстилю безпечними засобами.</p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Card 5 --}}
                    <a href="{{ route('services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-6.jpg') }}" alt="Прибирання офісу"
                                class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-green/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-briefcase class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">Прибирання офісу
                                </h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">Регулярне прибирання для
                                    комфортної атмосфери вашої команди та клієнтів.</p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>

                    {{-- Card 6 --}}
                    <a href="{{ route('services.promyslovyi-alpinizm') }}"
                        class="snap-center shrink-0 w-[80vw] rounded-2xl overflow-hidden relative shadow-md">
                        <div class="relative aspect-3/4">
                            <img src="{{ Vite::asset('resources/images/service-7.jpg') }}" alt="Промисловий альпінізм"
                                class="size-full object-cover" loading="lazy" />
                            <div class="absolute inset-0 bg-linear-to-t from-black/80 via-black/20 to-transparent"></div>
                            <div class="absolute inset-x-0 bottom-0 p-5">
                                <div
                                    class="size-10 rounded-xl bg-tryit-orange/25 backdrop-blur-sm flex items-center justify-center mb-3">
                                    <x-lucide-mountain class="size-5 text-white" stroke-width="1.5" />
                                </div>
                                <h3 class="font-display text-lg font-bold text-white leading-snug mb-1.5">Промисловий
                                    альпінізм</h3>
                                <p class="text-white/65 text-sm leading-relaxed line-clamp-2">Будь-які висотні роботи —
                                    професійно та безпечно з сертифікованим спорядженням.</p>
                                <div class="mt-3 inline-flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Детальніше <x-lucide-arrow-right class="size-3" stroke-width="2.5" />
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- Dot indicators --}}
                <div class="flex items-center justify-center gap-1.5 mt-2">
                    <template x-for="i in total" :key="i">
                        <button
                            @click="$refs.track.scrollTo({ left: (i - 1) * ($refs.track.querySelector('.snap-center').offsetWidth + 12), behavior: 'smooth' })"
                            class="rounded-full transition-all duration-300"
                            :class="current === i - 1 ? 'w-6 h-2 bg-tryit-orange' : 'size-2 bg-gray-300'"
                            aria-label="Slide"></button>
                    </template>
                </div>
            </div>

            {{-- ===== DESKTOP: Card grid ===== --}}
            <div class="hidden md:grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Service 2 --}}
                <a href="{{ route('services.myika-ta-ochyshchennia-soniachnykh-panelei') }}"
                    class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 animate-in duration-700"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="aspect-4/3 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-2.jpg') }}" alt="Мийка сонячних панелей"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="size-10 rounded-xl bg-tryit-green/10 flex items-center justify-center shrink-0">
                                <x-lucide-sun class="size-5 text-tryit-green" stroke-width="1.5" />
                            </div>
                            <h3
                                class="font-display text-lg font-bold text-gray-900 leading-snug group-hover:text-tryit-green transition-colors">
                                Мийка сонячних панелей</h3>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed mb-0">Видаляємо пил, бруд і наліт, щоб ваші батареї
                            працювали на повну потужність.</p>
                        <div
                            class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-green group-hover:gap-3 transition-all duration-300">
                            <span>Детальніше</span>
                            <x-lucide-arrow-right class="size-4" stroke-width="2" />
                        </div>
                    </div>
                </a>

                {{-- Service 3 --}}
                <a href="{{ route('services.pisliabudivelne-prybyrannia') }}"
                    class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 animate-in duration-700"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="aspect-4/3 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-3.jpg') }}" alt="Післябудівельне прибирання"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="size-10 rounded-xl bg-tryit-orange/10 flex items-center justify-center shrink-0">
                                <x-lucide-hard-hat class="size-5 text-tryit-orange" stroke-width="1.5" />
                            </div>
                            <h3
                                class="font-display text-lg font-bold text-gray-900 leading-snug group-hover:text-tryit-green transition-colors">
                                Післябудівельне прибирання</h3>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed mb-0">Швидко та якісно приберемо будівельне сміття,
                            пил та бруд після ремонту.</p>
                        <div
                            class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-green group-hover:gap-3 transition-all duration-300">
                            <span>Детальніше</span>
                            <x-lucide-arrow-right class="size-4" stroke-width="2" />
                        </div>
                    </div>
                </a>

                {{-- Service 4 --}}
                <a href="{{ route('services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva') }}"
                    class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 animate-in duration-700"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="aspect-4/3 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-4.jpg') }}" alt="Генеральне прибирання цехів"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="size-10 rounded-xl bg-tryit-green/10 flex items-center justify-center shrink-0">
                                <x-lucide-factory class="size-5 text-tryit-green" stroke-width="1.5" />
                            </div>
                            <h3
                                class="font-display text-lg font-bold text-gray-900 leading-snug group-hover:text-tryit-green transition-colors">
                                Генеральне прибирання цехів</h3>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed mb-0">Комплексне прибирання цехів, складів та
                            виробничих приміщень для безпеки та порядку.</p>
                        <div
                            class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-green group-hover:gap-3 transition-all duration-300">
                            <span>Детальніше</span>
                            <x-lucide-arrow-right class="size-4" stroke-width="2" />
                        </div>
                    </div>
                </a>

                {{-- Service 5 --}}
                <a href="{{ route('services.khimchystka') }}"
                    class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 animate-in duration-700"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="aspect-4/3 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-5.jpg') }}" alt="Хімчистка"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="size-10 rounded-xl bg-tryit-orange/10 flex items-center justify-center shrink-0">
                                <x-lucide-spray-can class="size-5 text-tryit-orange" stroke-width="1.5" />
                            </div>
                            <h3
                                class="font-display text-lg font-bold text-gray-900 leading-snug group-hover:text-tryit-green transition-colors">
                                Хімчистка</h3>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed mb-0">Глибоке очищення меблів, килимів та текстилю
                            безпечними засобами.</p>
                        <div
                            class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-green group-hover:gap-3 transition-all duration-300">
                            <span>Детальніше</span>
                            <x-lucide-arrow-right class="size-4" stroke-width="2" />
                        </div>
                    </div>
                </a>

                {{-- Service 6 --}}
                <a href="{{ route('services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu') }}"
                    class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 animate-in duration-700"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="aspect-4/3 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-6.jpg') }}" alt="Прибирання офісу"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="size-10 rounded-xl bg-tryit-green/10 flex items-center justify-center shrink-0">
                                <x-lucide-briefcase class="size-5 text-tryit-green" stroke-width="1.5" />
                            </div>
                            <h3
                                class="font-display text-lg font-bold text-gray-900 leading-snug group-hover:text-tryit-green transition-colors">
                                Прибирання офісу</h3>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed mb-0">Регулярне прибирання для комфортної атмосфери
                            вашої команди та клієнтів.</p>
                        <div
                            class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-green group-hover:gap-3 transition-all duration-300">
                            <span>Детальніше</span>
                            <x-lucide-arrow-right class="size-4" stroke-width="2" />
                        </div>
                    </div>
                </a>

                {{-- Service 7 --}}
                <a href="{{ route('services.promyslovyi-alpinizm') }}"
                    class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 animate-in duration-700"
                    x-intersect="$el.classList.add('zoom-in')">
                    <div class="aspect-4/3 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/service-7.jpg') }}" alt="Промисловий альпінізм"
                            class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                            loading="lazy" />
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="size-10 rounded-xl bg-tryit-orange/10 flex items-center justify-center shrink-0">
                                <x-lucide-mountain class="size-5 text-tryit-orange" stroke-width="1.5" />
                            </div>
                            <h3
                                class="font-display text-lg font-bold text-gray-900 leading-snug group-hover:text-tryit-green transition-colors">
                                Промисловий альпінізм</h3>
                        </div>
                        <p class="text-sm text-gray-500 leading-relaxed mb-0">Будь-які висотні роботи — професійно та
                            безпечно з сертифікованим спорядженням.</p>
                        <div
                            class="mt-4 flex items-center gap-1.5 text-sm font-semibold text-tryit-green group-hover:gap-3 transition-all duration-300">
                            <span>Детальніше</span>
                            <x-lucide-arrow-right class="size-4" stroke-width="2" />
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- === CTA: TRY IT + CALLBACK === --}}
    <section class="relative py-20 bg-tryit-green overflow-hidden">
        <div class="absolute inset-0 opacity-[0.04]"
            style="background-image: url('{{ Vite::asset('resources/images/header.webp') }}'); background-size: cover; background-position: center;">
        </div>
        <div class="relative max-w-5xl mx-auto px-5">
            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                {{-- Try It text --}}
                <div class="animate-in duration-700 select-none">
                    <div class="font-display font-black uppercase leading-[0.85] text-[8rem] md:text-[10rem] lg:text-[12rem] text-center lg:text-left"
                        style="background-image: url('{{ Vite::asset('resources/images/header.webp') }}'); background-size: cover; background-position: center; -webkit-background-clip: text; background-clip: text; color: transparent;">
                        <span class="block">Try</span>
                        <span class="block">It</span>
                    </div>
                </div>

                {{-- Callback form --}}
                <div class="animate-in duration-700">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/15">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="size-10 rounded-xl bg-white/15 flex items-center justify-center">
                                <x-lucide-phone-call class="size-5 text-white" stroke-width="1.5" />
                            </div>
                            <span class="font-display font-bold text-white text-lg">Зв’яжіться з нами</span>
                        </div>
                        <p class="text-white/60 text-sm mb-6">Залиште номер і ми передзвонимо протягом 15 хвилин</p>
                        @livewire('callback')
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- === HOW IT WORKS === --}}
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-5">
            <div class="text-center mb-16 animate-in duration-700" x-intersect="$el.classList.add('zoom-in')">
                <span class="font-display text-sm font-medium text-gray-500">Як це працює</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-1.5">Три кроки <span
                        class="text-tryit-orange">до чистоти</span></h2>
                <div class="w-12 h-0.5 bg-tryit-orange mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-10 md:gap-8">
                <div class="flex flex-col items-center text-center gap-5 animate-in duration-700">
                    <div class="relative">
                        <div class="size-20 rounded-full bg-tryit-orange/10 flex items-center justify-center">
                            <x-lucide-file-text class="size-9 text-tryit-orange" stroke-width="1.5" />
                        </div>
                        <span
                            class="absolute -top-1 -right-1 size-7 rounded-full bg-tryit-orange text-white text-xs font-bold flex items-center justify-center">1</span>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900">Замовлення</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-0">
                        Заповніть просту форму, оберіть потрібну послугу та підтвердіть заявку.
                    </p>
                </div>

                <div class="flex flex-col items-center text-center gap-5">
                    <div class="relative">
                        <div class="size-20 rounded-full bg-tryit-green/10 flex items-center justify-center">
                            <x-lucide-calculator class="size-9 text-tryit-green" stroke-width="1.5" />
                        </div>
                        <span
                            class="absolute -top-1 -right-1 size-7 rounded-full bg-tryit-green text-white text-xs font-bold flex items-center justify-center">2</span>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900">Оцінка вартості</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-0">
                        Ми оцінюємо обсяг робіт та визначаємо прозору вартість послуги.
                    </p>
                </div>

                <div class="flex flex-col items-center text-center gap-5">
                    <div class="relative">
                        <div class="size-20 rounded-full bg-tryit-orange/10 flex items-center justify-center">
                            <x-lucide-sparkles class="size-9 text-tryit-orange" stroke-width="1.5" />
                        </div>
                        <span
                            class="absolute -top-1 -right-1 size-7 rounded-full bg-tryit-orange text-white text-xs font-bold flex items-center justify-center">3</span>
                    </div>
                    <h3 class="font-display text-lg font-bold text-gray-900">Результат</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-0">Виконуємо роботу вчасно, якісно та без затримок.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- === ABOUT + FAQ === --}}
    <section class="py-20 bg-gray-50/80">
        <div class="max-w-5xl mx-auto px-5">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <div class="animate-in duration-700">
                    <span class="font-display text-sm font-semibold text-gray-500">Про компанію</span>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-5">Чому обирають <span
                            class="text-tryit-orange">нас</span>?</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Наша клінінгова компанія — це професійний сервіс з прибирання, який допомагає підтримувати чистоту у
                        вашому домі чи офісі. Ми використовуємо сучасні методи, екологічні засоби та відповідально ставимося
                        до кожного замовлення.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Ми пропонуємо широкий спектр послуг: від генерального прибирання до спеціалізованого догляду за
                        меблями та покриттями. Наша мета — зробити ваш простір ідеально чистим та комфортним.
                    </p>
                </div>

                {{-- FAQ Accordion --}}
                <div class="animate-in duration-700" x-data="{ faq: null }">
                    <span class="font-display text-sm font-semibold text-gray-500">Відповіді на питання</span>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mb-5"><span
                            class="text-tryit-orange">FAQ</span></h2>

                    <div class="flex flex-col divide-y divide-gray-200">
                        <div class="py-4">
                            <button @click="faq = faq === 1 ? null : 1"
                                class="w-full flex items-center justify-between gap-4 text-left cursor-pointer">
                                <span class="font-display font-bold text-gray-900 text-sm leading-snug">Які засоби ви
                                    використовуєте для прибирання?</span>
                                <x-lucide-plus class="size-4 text-tryit-orange shrink-0 transition-transform duration-300"
                                    ::class="faq === 1 && 'rotate-45'" />
                            </button>
                            <div x-show="faq === 1" x-transition:enter="transition-all duration-300 ease-out"
                                x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-40"
                                x-transition:leave="transition-all duration-200 ease-in"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                class="overflow-hidden">
                                <p class="text-sm text-gray-500 leading-relaxed mt-2 mb-0">Ми використовуємо професійні
                                    екологічні засоби, безпечні для людей, дітей та домашніх тварин. Всі засоби
                                    сертифіковані та гіпоалергенні.</p>
                            </div>
                        </div>

                        <div class="py-4">
                            <button @click="faq = faq === 3 ? null : 3"
                                class="w-full flex items-center justify-between gap-4 text-left cursor-pointer">
                                <span class="font-display font-bold text-gray-900 text-sm leading-snug">Чи потрібно бути
                                    присутнім під час прибирання?</span>
                                <x-lucide-plus class="size-4 text-tryit-orange shrink-0 transition-transform duration-300"
                                    ::class="faq === 3 && 'rotate-45'" />
                            </button>
                            <div x-show="faq === 3" x-transition:enter="transition-all duration-300 ease-out"
                                x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-40"
                                x-transition:leave="transition-all duration-200 ease-in"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                class="overflow-hidden">
                                <p class="text-sm text-gray-500 leading-relaxed mt-2 mb-0">Ні, ваша присутність не
                                    обов’язкова. Достатньо забезпечити доступ до приміщення. Ми гарантуємо повну матеріальну
                                    відповідальність.</p>
                            </div>
                        </div>

                        <div class="py-4">
                            <button @click="faq = faq === 4 ? null : 4"
                                class="w-full flex items-center justify-between gap-4 text-left cursor-pointer">
                                <span class="font-display font-bold text-gray-900 text-sm leading-snug">Як швидко ви можете
                                    приїхати?</span>
                                <x-lucide-plus class="size-4 text-tryit-orange shrink-0 transition-transform duration-300"
                                    ::class="faq === 4 && 'rotate-45'" />
                            </button>
                            <div x-show="faq === 4" x-transition:enter="transition-all duration-300 ease-out"
                                x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-40"
                                x-transition:leave="transition-all duration-200 ease-in"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                class="overflow-hidden">
                                <p class="text-sm text-gray-500 leading-relaxed mt-2 mb-0">Зазвичай ми можемо організувати
                                    виїзд протягом 1–2 робочих днів. У термінових випадках можливий виїзд у день звернення.
                                </p>
                            </div>
                        </div>

                        <div class="py-4">
                            <button @click="faq = faq === 5 ? null : 5"
                                class="w-full flex items-center justify-between gap-4 text-left cursor-pointer">
                                <span class="font-display font-bold text-gray-900 text-sm leading-snug">Чи надаєте ви
                                    гарантію на послуги?</span>
                                <x-lucide-plus class="size-4 text-tryit-orange shrink-0 transition-transform duration-300"
                                    ::class="faq === 5 && 'rotate-45'" />
                            </button>
                            <div x-show="faq === 5" x-transition:enter="transition-all duration-300 ease-out"
                                x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-40"
                                x-transition:leave="transition-all duration-200 ease-in"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                class="overflow-hidden">
                                <p class="text-sm text-gray-500 leading-relaxed mt-2 mb-0">Так, ми гарантуємо якість кожної
                                    послуги. Якщо ви не задоволені результатом — ми безкоштовно виправимо недоліки протягом
                                    24 годин.</p>
                            </div>
                        </div>

                        <div class="py-4">
                            <button @click="faq = faq === 6 ? null : 6"
                                class="w-full flex items-center justify-between gap-4 text-left cursor-pointer">
                                <span class="font-display font-bold text-gray-900 text-sm leading-snug">Чи працюєте у
                                    вихідні та святкові дні?</span>
                                <x-lucide-plus class="size-4 text-tryit-orange shrink-0 transition-transform duration-300"
                                    ::class="faq === 6 && 'rotate-45'" />
                            </button>
                            <div x-show="faq === 6" x-transition:enter="transition-all duration-300 ease-out"
                                x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-40"
                                x-transition:leave="transition-all duration-200 ease-in"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                class="overflow-hidden">
                                <p class="text-sm text-gray-500 leading-relaxed mt-2 mb-0">Так, ми працюємо 7 днів на
                                    тиждень, включаючи вихідні. Графік у святкові дні узгоджується індивідуально.</p>
                            </div>
                        </div>

                        <div class="py-4">
                            <button @click="faq = faq === 7 ? null : 7"
                                class="w-full flex items-center justify-between gap-4 text-left cursor-pointer">
                                <span class="font-display font-bold text-gray-900 text-sm leading-snug">Чи можна замовити
                                    разове прибирання?</span>
                                <x-lucide-plus class="size-4 text-tryit-orange shrink-0 transition-transform duration-300"
                                    ::class="faq === 7 && 'rotate-45'" />
                            </button>
                            <div x-show="faq === 7" x-transition:enter="transition-all duration-300 ease-out"
                                x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-40"
                                x-transition:leave="transition-all duration-200 ease-in"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                class="overflow-hidden">
                                <p class="text-sm text-gray-500 leading-relaxed mt-2 mb-0">Звичайно! Ми пропонуємо як
                                    разові, так і регулярні послуги. При постійній співпраці надаємо знижку до 20%.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- === BLOG === --}}
    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-5">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-12">
                <div>
                    <span class="font-display text-sm font-semibold text-gray-500">Корисні статті</span>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-1.5">
                        <span class="text-tryit-orange">Блог</span>
                    </h2>
                </div>
                <a href="{{ route('blog') }}"
                    class="inline-flex items-center gap-1.5 text-sm font-semibold text-tryit-green hover:gap-3 transition-all duration-300">
                    Всі статті <x-lucide-arrow-right class="size-4" stroke-width="2" />
                </a>
            </div>

            @php $posts = \App\Models\Post::published()->take(3)->get(); @endphp

            {{-- Mobile: horizontal scroll --}}
            <div class="md:hidden" x-data="{ scrollEl: null, active: 0, count: {{ $posts->count() }} }" x-init="scrollEl = $refs.blogScroll;
            scrollEl.addEventListener('scroll', () => { active = Math.round(scrollEl.scrollLeft / (scrollEl.scrollWidth / count)) })">
                <div x-ref="blogScroll"
                    class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4 -mx-5 px-5 scroll-pl-5"
                    style="scrollbar-width: none; -ms-overflow-style: none;">
                    @foreach ($posts as $post)
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                            class="group flex-none w-[75vw] flex flex-col bg-gray-50 rounded-2xl overflow-hidden snap-start">
                            <div class="aspect-16/10 overflow-hidden">
                                <img src="{{ $post->cover_image }}" alt="{{ $post->title }}"
                                    class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                                    loading="lazy" />
                            </div>
                            <div class="flex flex-col flex-1 p-4">
                                <div class="flex items-center gap-3 text-xs text-gray-400 mb-2">
                                    <span>{{ $post->published_at->translatedFormat('d M Y') }}</span>
                                    <span class="size-1 rounded-full bg-gray-300"></span>
                                    <span>{{ $post->reading_time }} хв</span>
                                </div>
                                <h3 class="font-display text-sm font-bold text-gray-900 leading-snug mb-1.5 line-clamp-2">
                                    {{ $post->title }}</h3>
                                <p class="text-xs text-gray-500 leading-relaxed line-clamp-2 mb-0">{{ $post->excerpt }}
                                </p>
                                <div
                                    class="mt-auto pt-3 flex items-center gap-1.5 text-xs font-semibold text-tryit-orange">
                                    Читати <x-lucide-arrow-right class="size-3.5" stroke-width="2" />
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="flex justify-center gap-1.5 mt-4">
                    <template x-for="i in count" :key="i">
                        <button
                            @click="scrollEl.scrollTo({ left: (i - 1) * (scrollEl.scrollWidth / count), behavior: 'smooth' })"
                            class="size-2 rounded-full transition-all duration-300 cursor-pointer"
                            :class="active === i - 1 ? 'bg-tryit-orange w-5' : 'bg-gray-300'"></button>
                    </template>
                </div>
            </div>

            {{-- Desktop: grid --}}
            <div class="hidden md:grid md:grid-cols-3 gap-6">
                @foreach ($posts as $post)
                    <a href="{{ route('blog.show', ['slug' => $post->slug]) }}"
                        class="group flex flex-col bg-gray-50 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-500">
                        <div class="aspect-16/10 overflow-hidden">
                            <img src="{{ $post->cover_image }}" alt="{{ $post->title }}"
                                class="size-full object-cover group-hover:scale-105 transition-transform duration-700"
                                loading="lazy" />
                        </div>
                        <div class="flex flex-col flex-1 p-5">
                            <div class="flex items-center gap-3 text-xs text-gray-400 mb-3">
                                <span>{{ $post->published_at->translatedFormat('d M Y') }}</span>
                                <span class="size-1 rounded-full bg-gray-300"></span>
                                <span>{{ $post->reading_time }} хв читання</span>
                            </div>
                            <h3
                                class="font-display text-base font-bold text-gray-900 leading-snug mb-2 group-hover:text-tryit-green transition-colors line-clamp-2">
                                {{ $post->title }}</h3>
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-2 mb-0">{{ $post->excerpt }}</p>
                            <div
                                class="mt-auto pt-4 flex items-center gap-1.5 text-xs font-semibold text-tryit-orange group-hover:gap-2.5 transition-all duration-300">
                                Читати <x-lucide-arrow-right class="size-3.5" stroke-width="2" />
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
